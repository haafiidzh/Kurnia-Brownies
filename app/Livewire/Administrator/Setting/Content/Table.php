<?php

namespace App\Livewire\Administrator\Setting\Content;

use App\Models\Content;
use Livewire\Component;

class Table extends Component
{
    public $id;
    public $label;
    public $value;

    public $selectedGroup = 'cta_product';

    public function selectGroup($group)
    {
        $this->selectedGroup = $group;
    }

    public function render()
    {   
        $groups = Content::select('group')->distinct()->get();

        if ($this->selectedGroup) {
            $datas = Content::where('group', $this->selectedGroup)->get();
        }
        
        return view('livewire.administrator.setting.content.table', 
            [
                'datas' => $datas,
                'groups' => $groups
            ]);
    }
}
