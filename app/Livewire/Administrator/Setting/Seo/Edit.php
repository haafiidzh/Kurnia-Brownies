<?php

namespace App\Livewire\Administrator\Setting\Seo;

use App\Models\Seo;
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
        $this->id = Seo::find($id);
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

        if ($data->type === 'image') {

            $files = $data->value;
            
            if ($files) {
                $path = str_replace('/storage','',$files);
                Storage::disk('public')->delete($path);
            }

            if ($this->newValue) {
                $imageName =  $data->key . '.' . $this->newValue->extension();
                $this->newValue->storeAs('images/setting/seo', $imageName, 'public');

                $image = '/storage/images/setting/seo/' . $imageName;
                $data->update(
                    [
                        'value' => $image
                    ]
                );

                $this->updateCache($key, $image);
            }

        } elseif ($data->type === 'input' or 'textarea') {
            $data->update(
                [
                    'value' => $this->value
                ]
            );
            $this->updateCache($key, $this->value);
        }

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Data berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.seo');
    }

    public function render()
    {
        return view('livewire.administrator.setting.seo.edit');
    }
}
