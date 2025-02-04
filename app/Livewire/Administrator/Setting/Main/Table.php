<?php

namespace App\Livewire\Administrator\Setting\Main;

use App\Models\AppSetting;
use Livewire\Component;

class Table extends Component
{
    public $id;
    public $label;
    public $value;

    public $selectedGroup = 'website_general';

    public function selectGroup($group)
    {
        $this->selectedGroup = $group;
    }

    public function render()
    {   
        $groups = AppSetting::select('group')->distinct()->get();

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
