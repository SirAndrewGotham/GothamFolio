<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageService
{
    protected $moduleConfig = [
        'project' => [
            'base_folder' => 'images/projects',
            'default_image_type' => 'card',
            'path_pattern' => '{base_folder}/{item_id}/{image_type}/{size}/{filename}'
        ],
        'blog' => [
            'base_folder' => 'blogs',
            'default_image_type' => 'card',
            'path_pattern' => 'images/{base_folder}/{item_id}/{image_type}/{size}/{filename}'
        ],
        'gallery' => [
            'base_folder' => 'gallery',
            'default_image_type' => 'lightbox',
            'path_pattern' => 'images/{base_folder}/{item_id}/{image_type}/{size}/{filename}'
        ]
    ];

    protected $sizes = [
        'card' => [
            'xl' => ['width' => 800, 'height' => 600],
            'lg' => ['width' => 600, 'height' => 450],
            'md' => ['width' => 400, 'height' => 300],
            'sm' => ['width' => 300, 'height' => 225],
        ],
        'hero' => [
            'xl' => ['width' => 1200, 'height' => 800],
            'lg' => ['width' => 800, 'height' => 533],
            'md' => ['width' => 600, 'height' => 400],
        ],
        'lightbox' => [
            'original' => ['width' => 1920, 'height' => 1080],
            'large' => ['width' => 1200, 'height' => 800],
        ]
    ];

    public function processImage($uploadedImage, $module, $itemId, $imageType = null, $customOptions = [])
    {
        $config = $this->getModuleConfig($module);
        $imageType = $imageType ?? $config['default_image_type'];

        $manager = new ImageManager(new Driver());
        $baseFilename = ($imageType === 'card' ? 'cover-' : 'gallery-') . Str::random(6);
        $processedImages = [];

        if (!$uploadedImage || !$uploadedImage->isValid()) {
            \Log::error("Invalid image file uploaded for module: {$module}");
            return [];
        }

        foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
            $img = $manager->read($uploadedImage);
            $img->resize($dimensions['width'], $dimensions['height']);
            $img->cover($dimensions['width'], $dimensions['height']);

            $quality = $imageType === 'lightbox' ? 90 : 80;

            // Build paths using module-specific pattern
            $webpPath = $this->buildImagePath($module, $itemId, $imageType, $sizeName, $baseFilename, 'webp');
            $jpgPath = $this->buildImagePath($module, $itemId, $imageType, $sizeName, $baseFilename, 'jpg');

            $webpImage = $img->toWebp($quality);
            Storage::disk('public')->put($webpPath, $webpImage);
            $processedImages[$sizeName]['webp'] = $webpPath;

            $jpegImage = $img->toJpeg($quality + 5);
            Storage::disk('public')->put($jpgPath, $jpegImage);
            $processedImages[$sizeName]['jpg'] = $jpgPath;
        }

        return $processedImages;
    }

    public function getImageUrls($module, $itemId, $storedImagePath, $imageType = null)
    {
        $config = $this->getModuleConfig($module);
        $imageType = $imageType ?? $config['default_image_type'];
        $images = [];

        if (!$storedImagePath) {
            return [];
        }

        // Check if it's an external URL
        if (strpos($storedImagePath, 'http') === 0) {
            foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
                $images[$sizeName] = [
                    'webp' => $storedImagePath,
                    'jpg' => $storedImagePath
                ];
            }
            return $images;
        }

        // Local path - extract base filename
        $pathInfo = pathinfo($storedImagePath);
        $baseFile = $pathInfo['filename'];

        foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
            $webpPath = $this->buildImagePath($module, $itemId, $imageType, $sizeName, $baseFile, 'webp');
            $jpgPath = $this->buildImagePath($module, $itemId, $imageType, $sizeName, $baseFile, 'jpg');

            if (Storage::disk('public')->exists($webpPath)) {
                $images[$sizeName] = [
                    'webp' => Storage::url($webpPath),
                    'jpg' => Storage::url($jpgPath)
                ];
            }
        }

        return $images;
    }

    protected function buildImagePath($module, $itemId, $imageType, $size, $filename, $extension)
    {
        $config = $this->getModuleConfig($module);

        return str_replace(
            ['{base_folder}', '{item_id}', '{image_type}', '{size}', '{filename}'],
            [$config['base_folder'], $itemId, $imageType, $size, $filename],
            $config['path_pattern']
        ) . '.' . $extension;
    }

    protected function getModuleConfig($module)
    {
        if (!isset($this->moduleConfig[$module])) {
            \Log::warning("Unknown module '{$module}' in ImageService, falling back to 'project' config");
        }
        return $this->moduleConfig[$module] ?? $this->moduleConfig['project'];
    }
}
