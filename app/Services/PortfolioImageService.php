<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PortfolioImageService
{
    protected $sizes = [
        'card' => [
            'xl' => ['width' => 800, 'height' => 600],  // 4:3 ratio
            'lg' => ['width' => 600, 'height' => 450],
            'md' => ['width' => 400, 'height' => 300],
            'sm' => ['width' => 300, 'height' => 225],
        ],
        'hero' => [
            'xl' => ['width' => 1200, 'height' => 800], // 3:2 ratio
            'lg' => ['width' => 800, 'height' => 533],
            'md' => ['width' => 600, 'height' => 400],
        ],
        'lightbox' => [
            'original' => ['width' => 1920, 'height' => 1080], // Full HD
            'large' => ['width' => 1200, 'height' => 800],
        ]
    ];

    public function processProjectImage($uploadedImage, $itemId, $imageType = 'card', $customFolder = null, $baseFolder = 'portfolio')
    {
        $manager = new ImageManager(new Driver());
        $baseFilename = ($imageType === 'card' ? 'cover-' : 'gallery-') . Str::random(6);
        $processedImages = [];

        if (!$uploadedImage || !$uploadedImage->isValid()) {
            \Log::error('Invalid image file uploaded');
            return [];
        }

        // Determine the target folder
        $targetFolder = $customFolder ?: $imageType;

        foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
            $img = $manager->read($uploadedImage);
            $img->cover($dimensions['width'], $dimensions['height']);

            $quality = $imageType === 'lightbox' ? 90 : 80;
            $webpPath = "{$baseFolder}/{$itemId}/{$targetFolder}/{$sizeName}/{$baseFilename}.webp";
            $jpegPath = "{$baseFolder}/{$itemId}/{$targetFolder}/{$sizeName}/{$baseFilename}.jpg";

            $webpImage = $img->toWebp($quality);
            Storage::disk('public')->put($webpPath, $webpImage);
            $processedImages[$sizeName]['webp'] = $webpPath;

            $jpegImage = $img->toJpeg($quality + 5);
            Storage::disk('public')->put($jpegPath, $jpegImage);
            $processedImages[$sizeName]['jpg'] = $jpegPath;
        }

        return $processedImages;
    }

    public function getProjectImageUrls($projectId, $imageType = 'card')
    {
        $images = [];

        $project = \App\Models\Project::find($projectId); // Changed to find by ID

        if ($project && $project->image) {
            // Check if it's a local path or external URL
            if (strpos($project->image, 'http') === 0) {
                // External URL - return it directly for all sizes
                foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
                    $images[$sizeName] = [
                        'webp' => $project->image,
                        'jpg' => $project->image
                    ];
                }
            } else {
                // Local path - use the responsive image system
                $pathInfo = pathinfo($project->image);
                $baseFile = $pathInfo['filename'];
                $directory = dirname($project->image);

                foreach ($this->sizes[$imageType] as $sizeName => $dimensions) {
                    $sizeDirectory = str_replace('/card/xl', "/card/{$sizeName}", $directory);

                    $webpPath = "{$sizeDirectory}/{$baseFile}.webp";
                    $jpgPath = "{$sizeDirectory}/{$baseFile}.jpg";

                    if (Storage::disk('public')->exists($webpPath)) {
                        $images[$sizeName] = [
                            'webp' => Storage::url($webpPath),
                            'jpg' => Storage::url($jpgPath)
                        ];
                    }
                }
            }
        }

        return $images;
    }
}
