<?php

namespace App\Livewire\Administrator\Cms\Content;

use App\Models\Cms;
use App\Models\Slider;
use Livewire\Component;

class Table extends Component
{
    public $id;
    public $label;
    public $value;

    public $selectedGroup = 'general';

    public function selectGroup($group)
    {
        $this->selectedGroup = $group;
    }

    public function render()
    {   
        $groups = Cms::select('group')->distinct()->get();

        if ($this->selectedGroup) {
            $datas = Cms::where('group', $this->selectedGroup)->get();
        }
        
        return view('livewire.administrator.cms.content.table', 
            [
                'datas' => $datas,
                'groups' => $groups
            ]);
    }
}
