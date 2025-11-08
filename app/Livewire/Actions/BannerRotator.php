<?php

namespace App\Livewire\Actions;

use App\Models\Banner;
use Livewire\Volt\Component;

new class extends Component {
    public Collection $banners;
    public int $carouselActive = 0;
    public int $carouselItems = 3;

    public function mount(): void
    {
        $this->banners = Banner::active()
            ->withCurrentTranslations()
            ->ordered()
            ->get();
        $this->carouselItems = $this->banners->count();
    }

    public function setCarousel($index): void
    {
        $this->carouselActive = $index;
    }
};
