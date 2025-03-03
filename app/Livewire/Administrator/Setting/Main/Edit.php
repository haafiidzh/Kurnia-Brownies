<?php

namespace App\Livewire\Administrator\Setting\Main;

use App\Models\AppSetting;
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
        $this->id = AppSetting::find($id);
        $this->data = $this->id;

        // Mounting
        $this->label = $this->data->label;
        $this->value = $this->data->value;
        $this->tip = $this->data->tip;
    }

    private function updateFavicon($fileName)
    {
        $sourcePath = public_path("storage/images/setting/main/{$fileName}");
        $destinationPath = public_path("favicon.ico");

        if (file_exists($sourcePath)) {
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            copy($sourcePath, $destinationPath);
        }
    }

    public function update()
    {
        $data = $this->id;
        $key = $data->key;
        // dd($key);

        $rules = [
            'value' => 'required|string|max:255',
        ];
        if ($data->type === 'image') {
            $rules['value'] = 'required|image|max:10024';
        }

        if ($data->type === 'image') {

            $files = $data->value;
            
            if ($this->newValue) {
                if ($files) {
                    $path = str_replace('/storage','',$files);
                    Storage::disk('public')->delete($path);
                }
                
                $imageName =  $data->key . '.' . $this->newValue->extension();
                $this->newValue->storeAs('images/setting/main', $imageName, 'public');

                $image = '/storage/images/setting/main/' . $imageName;
                $data->update(
                    [
                        'value' => $image
                    ]
                );

                $this->updateCache($key, $image);
            }

        } elseif ($data->type === 'input' or 'textarea') {
            if ($key === 'contact-whatsapp' ) {
                
                $phoneNumber = formatPhoneId($this->value);
                
                $data->update(
                    [
                        'value' => $phoneNumber
                    ]
                );
                $this->updateCache($key, $phoneNumber);

            } else {
                $data->update(
                    [
                        'value' => $this->value
                    ]
                );
                $this->updateCache($key, $this->value);
            }
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
