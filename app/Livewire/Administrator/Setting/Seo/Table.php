<?php

namespace App\Livewire\Administrator\Setting\Seo;

use App\Models\Seo;
use Livewire\Component;

class Table extends Component
{
    public $id;
    public $label;
    public $value;

    public $selectedGroup;

    public $queryString = 
    [
        'selectedGroup'
    ];

    public function mount()
    {
        $this->selectedGroup = session('selected_seo_group', 'home');
    }

    public function selectGroup($group)
    {
        $this->selectedGroup = $group;
        session(['selected_seo_group' => $group]);
    }

    public function render()
    {   
        $groups = Seo::select('group')
        ->distinct()
        ->get();

        if ($this->selectedGroup) {
            $datas = Seo::where('group', $this->selectedGroup)->get();
        }
        
        return view('livewire.administrator.setting.seo.table', 
            [
                'datas' => $datas,
                'groups' => $groups
            ]);
    }
}
