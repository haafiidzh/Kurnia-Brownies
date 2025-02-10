<div class="flex gap-5 mb-5">
    
    <div class="w-1/4">
        <div class="bg-white py-6 rounded-xl shadow-lg">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl tracking-wider">Identitas</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="px-6 pt-3">
                <div class="pb-3 ">
                    <h3 class="font-semibold">Nama Depan</h3>
                    <p class="">{{ $data->first_name }}</p>
                </div>
                <div class="pb-3 ">
                    <h3 class="font-semibold">Nama Belakang</h3>
                    <p class="">{{ $data->last_name }}</p>
                </div>
                <div class="pb-3 ">
                    <h3 class="font-semibold">Email</h3>
                    <p class="break-words">{{ $data->email }}</p>
                </div>
                <div class="">
                    <h3 class="font-semibold">No. Telepon</h3>
                    <p class="">{{ $data->phone }}</p>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="w-3/4">
        <div class="bg-white py-6 rounded-xl shadow-lg relative">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl tracking-wider">Pesan</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="pt-3 px-6">
                <p class="leading-relaxed">{{ $data->message }}</p>
            </div>
            <a href="{{ route('administrator.feedback.reply', ['id' => $data->id]) }}" class="absolute -bottom-7 border-2 border-slate-700 text-sm right-4 px-3 py-2 rounded-lg bg-white drop-shadow-md hover:bg-gray-100 hover:border-transparent transition-colors duration-300 active:bg-gray-300">
                Balas Pesan&nbsp;<i class="fa-regular fa-paper-plane"></i>
            </a>
        </div>
    </div>

    
</div>
