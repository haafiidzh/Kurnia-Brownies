<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>

    <div class="flex flex-col gap-5">

        <form wire:submit="update">
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white flex flex-col gap-4">
                <div>
                    <h2 class="mb-2 text-lg font-bold text-gray-800">Informasi Akun</h2>
                    <p class="text-sm text-gray-500">
                        Perbarui data Anda sesuai yang Anda butuhkan. Ingat selalu gunakan email dan nomor telepon aktif.
                    </p>
                </div>
                <div>
                    <label for="role" class="block ml-1 font-semibold text-sm text-slate-700">Username</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="role" wire:model="name">
                    @error('name')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="guard_name" class="block ml-1 font-semibold text-sm text-slate-700">Role</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="guard_name" wire:model="role" disabled>
                </div>
                <div>
                    <label for="role" class="block ml-1 font-semibold text-sm text-slate-700">Email</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl text-slate-600 placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="role" wire:model="email" disabled>
                </div>
                <div>
                    <label for="guard_name" class="block ml-1 font-semibold text-sm text-slate-700 ">No Telepon</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="text" name="guard_name" wire:model="phone">
                    @error('phone')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit"
                        class="px-4 py-3 uppercase bg-gray-700 text-sm text-gray-200 rounded-md tracking-widest hover:bg-green-400 hover:text-white active:bg-green-700 transition-all duration-300">
                        Simpan</button>
                    <span wire:loading wire:target="update"><i class="fa-solid fa-circle-notch fa-spin"></i> </span>
                </div>
            </div>
        </form>

        <form wire:submit="updatePassword">
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white flex flex-col gap-4">
                <div>
                    <h2 class="mb-2 text-lg font-bold text-gray-800">Perbarui Kata Sandi</h2>
                    <p class="text-sm text-gray-500">
                        Selalu gunakan kata sandi yang kuat dengan kombinasi huruf dan angka agar akun Anda tetap aman.
                    </p>
                </div>
                <div>
                    <label for="old_password" class="block ml-1 font-semibold text-sm text-slate-700 ">Kata Sandi Lama</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="password" name="old_password" placeholder="Masukkan Kata Sandi Lama Anda" wire:model.defer="old_password">
                    @error('old_password')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="new_password" class="block ml-1 font-semibold text-sm text-slate-700 ">Kata Sandi Baru</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="password" name="new_password" placeholder="Masukkan Kata Sandi Baru Anda" wire:model.defer="new_password">
                    @error('new_password')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="new_password_confirmation" class="block ml-1 font-semibold text-sm text-slate-700 ">Konfirmasi Kata Sandi Baru</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        type="password" name="new_password_confirmation" placeholder="Konfirmasi Kata Sandi Baru Anda" wire:model.defer="new_password_confirmation">
                    @error('new_password_confirmation')
                        <div class="mx-1 mt-2 font-semibold text-sm text-red-700">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <button type="submit"
                        class="px-4 py-3 uppercase bg-gray-700 text-sm text-gray-200 rounded-md tracking-widest hover:bg-green-400 hover:text-white active:bg-green-700 transition-all duration-300">
                        Simpan</button>
                    <span wire:loading wire:target="updatePassword"><i class="fa-solid fa-circle-notch fa-spin"></i> </span>
                </div>
            </div>
        </form>
        

        <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl mb-5 bg-white flex flex-col gap-4">
            <div>
                <h2 class="mb-2 text-lg font-bold text-gray-800">Lupa Kata Sandi</h2>
                <p class="text-sm text-gray-500">
                    Jika Anda lupa kata sandi, silakan klik tombol di bawah ini untuk mereset ulang kata sandi.
                </p>
            </div>
            <div class="mb-2">
                <a href=""
                    class="w-48 px-4 py-3 flex justify-center uppercase bg-gray-700 text-sm text-gray-200 rounded-md tracking-widest hover:bg-green-400 hover:text-white active:bg-green-700 transition-all duration-300">
                    <span>Lupa Kata Sandi</span>
                </a>
            </div>
        </div>
    </div>

</div>
