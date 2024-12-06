<?php

namespace App\Livewire\Administrator\Users;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public $id_pengguna;

    // Variable
    public $name;
    public $email;
    public $password;
    public $role;
    public $phone;

    public function mount($id)
    {
        $user = User::find($this->id_pengguna = $id);
        
        $this->id_pengguna = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->password = $user->password;

        $this->role = $user->roles->first() ? $user->roles->first()->id : null;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $this->id_pengguna,
            'phone' => 'required|string|min:10',
            'password' => 'nullable|string|min:8',
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::find($this->id_pengguna);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        // Update Role Baru
        $roleBaru = Role::find($this->role); //secara default ambil id role yang dipilih
        $user->syncRoles([$roleBaru]); //secara default syncRole id yang baru

        $user->save();

        session()->flash('flash_message', [
            'type' => 'updated',
            'message' => 'User berhasil diperbarui.',
        ]);

        return redirect()->route('administrator.users');
        
    }

    public function render()
    {
        // Hanya ambil role selain Developer
        $roles = Role::where('name', '!=', 'Developer')->get();
        return view(
            'livewire.administrator.users.edit',
            [
                'roles' => $roles,
            ]
        );
    }
}
