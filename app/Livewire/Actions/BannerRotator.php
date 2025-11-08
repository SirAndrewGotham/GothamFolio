<?php

namespace App\Livewire\Actions;

use App\Models\Banner;
use Livewire\Volt\Component;

new class extends Component {
    public $banners;
    public $carouselActive = 0;
    public $carouselItems = 3;

    public function mount()
    {
        $this->banners = Banner::active()
            ->withCurrentTranslations()
            ->ordered()
            ->get();
        $this->carouselItems = $this->banners->count();
    }

    public function setCarousel($index)
    {
        $this->carouselActive = $index;
    }
};
