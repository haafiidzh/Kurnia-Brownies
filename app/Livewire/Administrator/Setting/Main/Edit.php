<?php

namespace App\Livewire\Administrator\Setting\Main;

use App\Models\AppSetting;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $data;
    public $id;
    public $label;
    public $value;
    public $newValue;

    public function mount($id)
    {
        // Init
        $this->data = AppSetting::find($id);
        $data = $this->data;
        $this->id = $this->data;
        $this->value = $data->value;
    }

    public function update()
    {
        $data = $this->id;

        $rules = [
            'value' => 'required|string|max:255',
        ];
        if ($data->type === 'image') {
            $rules['value'] = 'required|image|max:10024';
        }

        if ($data->type === 'image') {

            $files = $data->value;
            
            if ($files) {
                $path = str_replace('/storage','',$files);
                Storage::disk('public')->delete($path);
            }

            $imageName =  $data->key . '.' . $this->newValue->extension();
            $this->newValue->storeAs('images/setting', $imageName, 'public');

            $image = '/storage/images/setting/' . $imageName;
            $data->update(
                [
                    'value' => $image
                ]
            );
        } elseif ($data->type === 'input' or 'textarea') {
            $data->update(
                [
                    'value' => $this->value
                ]
            );
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Data berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.app-setting');
    }

    public function render()
    {
        return view('livewire.administrator.setting.main.edit');
    }
}
