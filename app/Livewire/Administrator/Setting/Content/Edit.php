<?php

namespace App\Livewire\Administrator\Setting\Content;

use App\Models\Content;
use App\Traits\Cacheable;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads, Cacheable;
    
    public $id;
    public $data;
    public $label;
    public $value;
    public $newValue;
    public $tip;

    public function mount($id)
    {
        // Init
        $this->id = Content::find($id);
        $this->data = $this->id;

        // Mounting
        $this->label = $this->data->label;
        $this->value = $this->data->value;
        $this->tip = $this->data->tip;
    }

    public function update()
    {
        $data = $this->id;
        $key = $data->key;

        $rules = [
            'value' => 'required|string|max:255',
        ];
        if ($data->type === 'image') {
            $rules['value'] = 'required|image|max:10024';
        }

        if ($data->type == 'image') {
            
            $files = $data->value;
            
            if ($files) {
                $path = str_replace('/storage','',$files);
                Storage::disk('public')->delete($path);
            }

            if ($this->newValue) {
                $imageName =  $data->key . '.' . $this->newValue->extension();
                $this->newValue->storeAs('images/setting/content', $imageName, 'public');
    
                $image = '/storage/images/setting/content/' . $imageName;
                $data->update(
                    [
                        'value' => $image
                    ]
                );
    
                $this->updateCache($key, $image);
            }

        } elseif ($data->type == 'input' or 'textarea') {
            $data->update(
                [
                    'label' => $this->label,
                    'value' => $this->value
                ]
            );

            $this->updateCache($key, $this->value);
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Data berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.content');
    }

    public function render()
    {
        return view('livewire.administrator.setting.content.edit');
    }
}
