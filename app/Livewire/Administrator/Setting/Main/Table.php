<?php

namespace App\Livewire\Administrator\Setting\Main;

use App\Models\AppSetting;
use Livewire\Component;

class Table extends Component
{
    public $label;
    public $value;

    public $selectedGroup;

    public $queryString = 
    [
        'selectedGroup'
    ];

    public function mount()
    {
        $this->selectedGroup = session('selected_main_group', 'website_general');
    }

    public function selectGroup($group)
    {
        $this->selectedGroup = $group;
        session(['selected_main_group' => $group]);
    }

    public function render()
    {   
        $groups = AppSetting::select('group')
        ->distinct()
        ->get();

        if ($this->selectedGroup) {
            $datas = AppSetting::where('group', $this->selectedGroup)->get();
        }
        
        return view('livewire.administrator.setting.main.table', 
            [
                'datas' => $datas,
                'groups' => $groups
            ]);
    }
}
