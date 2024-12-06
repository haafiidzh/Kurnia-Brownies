<?php

namespace App\Livewire\Administrator\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Profile extends Component
{
    // Update Account
    public $name;
    public $email;
    public $phone;
    public $role;

    // Update Password
    public $old_password;
    public $new_password;
    public $new_password_confirmation;


    public function mount()
    {
        $data = Auth::user();

        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->role = $data->roles->first()->name;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255,name,' . Auth::user(),
            'phone' => 'required|string|min:10,phone,' . Auth::user(), 
        ]);

        $user = Auth::user();
    
        $user->name = $this->name;
        $user->phone = $this->phone;
        
        $user->save();
        // Abaikan error, ini berhasil

        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Profile berhasil diperbarui.',
        ]);
        
        return redirect()->route('administrator.profile');
    }

    public function updatePassword()
    {
        $this->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
            'new_password_confirmation' => 'required|min:8',
        ]);

        // Cek apakah password lama valid
        if (Hash::check($this->old_password, Auth::user()->password) == false) {
            throw ValidationException::withMessages([
                'old_password' => "The old password doesn't match with our records.",
            ]);
        }
        
        // Update password
        $user = Auth::user();
        $user->password = Hash::make($this->new_password);
        $user->save();
    
        // Reset field password
        $this->reset(['old_password', 'new_password', 'new_password_confirmation']);
    
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'Kata sandi berhasil diperbarui.',
        ]);
    
        return redirect()->route('administrator.profile');
    }

    public function render()
    {
        return view('livewire.administrator.profile.profile');
    }
}
