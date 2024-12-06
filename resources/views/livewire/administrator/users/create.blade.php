<div>
    <form wire:submit.prevent="store">

        <div class=" w-full">
            {{-- Role --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Role --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-shield p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Role </h2>
                            <p class="text-lg"> &nbsp;| Peran User</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Sesuaikan peran user agar akun tidak
                            disalahgunakan
                            oleh user.</p>
                    </div>
                </div>

                {{-- Form Role --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-2">
                        <label for="role_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Role</label>
                        <select
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            name="role" placeholder="Nama Lengkap" wire:model="role">
                            <option value="">Pilih Role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @error('role')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>


            {{-- Akun --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Akun --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-envelope p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Account </h2>
                            <p class="text-lg"> &nbsp;| Akun User</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Akun yang akan digunakan user untuk login, dan
                            kontak dari pemegang akun.</p>
                    </div>
                </div>

                {{-- Form Akun --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="mb-5">
                        <label for="email" class="block ml-1 font-semibold text-sm text-slate-700 ">Email</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="email" placeholder="Email" wire:model="email">
                        @error('email')
                            <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-full mb-2 flex gap-4">
                        <div class="flex-grow">
                            <label for="name"
                                class="block ml-1 font-semibold text-sm text-slate-700 ">Username</label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="text" name="name" placeholder="Username" wire:model="name">
                            @error('name')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-46">
                            <label for="phone" class="block ml-1 font-semibold text-sm text-slate-700 ">Nomor
                                Handphone</label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="text" name="phone" placeholder="Nomor Handphone" wire:model="phone">
                            @error('phone')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            {{-- Keamanan --}}
            <div class="mb-5 flex">
                {{-- Deskripsi Keamanan --}}
                <div class="w-1/4 flex flex-row gap-2">
                    <i class="fa-solid fa-lock p-2"></i>
                    <div class="w-48 flex flex-col gap-2">

                        <div class="flex flex-row">
                            <h2 class="text-lg font-semibold">Security </h2>
                            <p class="text-lg"> &nbsp;| Keamanan</p>
                        </div>

                        <p class="text-sm text-slate-500 tracking-wider">Pengaturan kata sandi yang akan digunakan
                            untuk
                            otentikasi user ketika login ke sistem.</p>
                    </div>
                </div>

                {{-- Form Keamanan --}}
                <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                    <div class="w-full mb-2 flex gap-4">
                        <div class="w-1/2">
                            <label for="password"
                                class="block ml-1 font-semibold text-sm text-slate-700 ">Password</label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="password" name="password" placeholder="Password" wire:model="password">
                            @error('password')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="w-1/2">
                            <label for="" class="block ml-1 font-semibold text-sm text-slate-700 ">Konfirmasi
                                Password</label>
                            <input
                                class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                                type="password" name="password_confirmation" placeholder="Konfirmasi Password" wire:model="password_confirmation">
                            @error('password_confirmation')
                                <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <div class="pb-14 w-1/2 flex justify-center mx-auto">
                <button type="submit"
                    class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md active:bg-slate-300 transition-all">
                    <span wire:loading.remove wire:target="store">
                        Simpan <i class="text-xs fa-solid fa-arrow-right"></i>
                    </span>
                
                    <span wire:loading wire:target="store">
                        Loading <i class="fa-solid fa-circle-notch fa-spin"></i> 
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>
