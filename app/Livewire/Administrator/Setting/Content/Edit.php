<?php

namespace App\Livewire\Administrator\Setting\Content;

use App\Models\Content;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    
    public $id;
    public $label;
    public $value;

    public function mount($id)
    {
        // Init
        $this->id = Content::find($id);
        $data = $this->id;

        // Mounting
        $this->label = $data->label;
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

        if ($data->type == 'image') {
            
            $files = $data->value;
            if ($files) {
                Storage::disk('public')->delete($files);
            }

            $imageName = $data->key . '.' . $this->value->extension();
            $imagePath = $this->value->storeAs('images', $imageName, 'public');

            $data->update(
                [
                    'label' => $this->label,
                    'value' => $imagePath
                ]
            );
        } elseif ($data->type == 'input' or 'textarea') {
            $data->update(
                [
                    'label' => $this->label,
                    'value' => $this->value
                ]
            );
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Data berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.content');
    }

    public function render()
    {
        $data = $this->id;
        return view('livewire.administrator.setting.content.edit', ['data' => $data]);
    }
}
