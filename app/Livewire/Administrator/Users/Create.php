<?php

namespace App\Livewire\Administrator\Users;

use Livewire\Component;
use App\Models\Biodata;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class Create extends Component
{
    // Users
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;
    public $phone;

    public function store()
    {
        // Validasi input
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|min:10',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required|string|min:8',
            'role' => 'required|exists:roles,id',
        ]);

        // Buat user baru di tabel users
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password), // Hash password
            'phone' => $this->phone,
        ]);

        // Assign Role yang baru saja dibuat
        $roleName = Role::find($this->role);
        $user->assignRole($roleName);

        // Event untuk mengirim email verifikasi pada user yang baru saja dibuat
        event(new Registered($user));

        
        session()->flash('flash_message', [
            'type' => 'created',
            'message' => 'User berhasil ditambah.',
        ]);

        return redirect()->route('administrator.users');
    }

    public function render()
    {
        // Hanya ambil role selain Developer
        $roles = Role::where('name', '!=', 'Developer')->get();
        return view(
            'livewire.administrator.users.create',
            ['roles' => $roles]
        );
    }
}
