<div class="flex gap-5 mb-5 w-full">

    <div class="w-1/3 gap-5 flex flex-col">
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Informasi</h3>
            <div class="border-b border-slate-700"></div>
            <h1 class="text-lg py-3 px-6 font-semibold mb-1">{{ $data->title }}</h1>

            <div class="flex flex-col gap-2 text-sm px-6">
                <p>Dibuat oleh {{ $data->author->name }}</p>
                <p>{{ $data->created_at->format('d F Y, H.i') }}</p>
                <p class="flex items-center gap-1">
                    <i class="{{ $data->is_active == true ? 'text-green-600 fa-solid fa-circle-check' : 'text-red-500 fa-solid fa-xmark' }}"></i>
                    <span>{{ $data->is_active == true ? 'Aktif' : 'Tidak Aktif' }}</span>
                </p>
            </div>
        </div>
        <div class="py-3 shadow-md rounded-xl bg-white">
            <h3 class="px-6 font-semibold text-xl pb-3">Subjek</h3>
            <div class="border-b border-slate-700"></div>
            <h4 class="pt-3 px-6 mb-1">{{ $data->subject }}</h4>
        </div>
    </div>
    
    <div class="w-2/3">
        <div class="bg-white py-3 rounded-xl shadow-lg">
            <div class="pb-3 px-6">
                <h1 class="font-semibold text-xl">Deskripsi</h1>
            </div>
            <div class="w-full border-slate-700 border-b"></div>
            <div class="pt-3 px-6">
                <img class=" pb-3 w-full" src="{{ url($data->image) }}" alt="">
                <p class="leading-relaxed">{!! $data->description !!}</p>
            </div>
        </div>
    </div>
    
    </div>
</div>
