<?php

namespace App\Livewire\Admin;

use App\Models\Visitor;
use Livewire\Component;

class VisitorStats extends Component
{
    public $totalVisits;
    public $todayVisits;

    public function mount()
    {
        $this->updateStats();
    }

    public function updateStats()
    {
        $this->totalVisits = Visitor::count();
        $this->todayVisits = Visitor::whereDate('created_at', today())->count();
    }

    protected function getListeners()
    {
        return [
            "echo:visitor-stats,.VisitorTracked" => 'updateStats',
        ];
    }

    public function render()
    {
        return view('livewire.admin.visitor-stats');
    }
}
