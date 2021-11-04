<?php

namespace App\Http\Livewire\Consultant;

use Livewire\Component;

class ConsultantDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.consultant.consultant-dashboard-component')->layout('layouts.base');
    }
}
