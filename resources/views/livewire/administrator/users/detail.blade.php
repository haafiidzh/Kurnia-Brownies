<div>
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
                    {{-- @dd($user) --}}

                    <p class="text-sm text-slate-500 tracking-wider">Sesuaikan peran user agar akun tidak
                        disalahgunakan
                        oleh user.</p>
                </div>
            </div>

            {{-- Form Role --}}
            <div class="w-1/2 px-6 py-4 shadow-md rounded-3xl bg-white">
                <div class="mb-5">
                    <label for="role_id" class="block ml-1 font-semibold text-sm text-slate-700 ">Role</label>
                    <input
                        class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                        name="role_id" placeholder="Nama Lengkap" value="{{ $user->roles->first()->name }}" disabled>
                        
                        
                </input>
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
                        type="text" name="email" placeholder="Email" value="{{ $user->email }}" disabled>
                </div>
                <div class="w-full mb-5 flex gap-4">
                    <div class="flex-grow">
                        <label for="name"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">Username</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="name" placeholder="Username" value="{{ $user->name }}" disabled>
                    </div>
                    <div class="w-1/3">
                        <label for="phone" class="block ml-1 font-semibold text-sm text-slate-700 ">Nomor
                            Handphone</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="text" name="phone" placeholder="Nomor Handphone" value="{{ $user->phone }}" disabled>
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
                <div class="w-full mb-5 flex gap-4">
                    <div class="w-1/2">
                        <label for="password"
                            class="block ml-1 font-semibold text-sm text-slate-700 ">Password</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="password" name="password" placeholder="Password" value="{{ $user->password }}" disabled>
                    </div>
                    {{-- <div class="w-1/2">
                        <label for="" class="block ml-1 font-semibold text-sm text-slate-700 ">Konfirmasi
                            Password</label>
                        <input
                            class="w-full mt-2 px-3 py-3 border border-black text-sm rounded-xl placeholder:text-slate-400 placeholder:tracking-[0.075rem]"
                            type="password" name="" placeholder="Konfirmasi Password">
                    </div> --}}
                </div>
            </div>

        </div>

        <div class="pb-5"></div>

        {{-- <div class="pb-16 w-1/2 flex justify-center">
            <button type="submit"
                class="w-1/2 px-6 py-3 rounded-lg border-2 text-lg font-medium text-slate-700 border-black hover:text-black hover:border-transparent hover:bg-white hover:shadow-md transition-all">Simpan
                <i class="text-xs fa-solid fa-arrow-right"></i></button>
        </div> --}}
    </div>
</div>