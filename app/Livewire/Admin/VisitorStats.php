<?php

namespace App\Livewire\Admin;

use App\Models\Visitor;
use Livewire\Component;

class VisitorStats extends Component
{
    public int $totalVisits;
    public int $todayVisits;

    public function mount(): void
    {
        $this->updateStats();
    }

    public function updateStats(): void
    {
        $this->totalVisits = Visitor::count();
        $this->todayVisits = Visitor::whereDate('created_at', today())->count();
    }

    protected function getListeners(): array
    {
        return [
            "echo:visitor-stats,.VisitorTracked" => 'updateStats',
        ];
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.visitor-stats');
    }
}
