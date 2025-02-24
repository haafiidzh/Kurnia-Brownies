<?php

namespace App\Livewire\Administrator\Setting\Content;

use App\Models\Content;
use App\Traits\Cacheable;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Laravel\Facades\Image;
use Intervention\Image\Drivers\Gd\Encoders\WebpEncoder;

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

            if ($this->newValue) {
                if ($files) {
                    $path = str_replace('/storage','',$files);
                    Storage::disk('public')->delete($path);
                }
                
                $imageName =  $data->key . '.webp';

                $convertedImage = Image::read($this->newValue->getRealPath())
                    ->encode(new WebpEncoder(90));
                
                Storage::disk('public')->put('images/setting/content/' . $imageName, $convertedImage);

    
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
