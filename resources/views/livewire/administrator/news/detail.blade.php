<div class="flex gap-5 mb-5 w-full">

    <div class="w-1/3 gap-5 flex flex-col">
        <div class="py-3 rounded-xl bg-white">
            <h2 class="px-6 font-semibold text-xl pb-3">Informasi</h2>
            <div class="border-b border-slate-400"></div>
            <h3 class="text-lg py-3 px-6 font-semibold break-words">{{ $data->title }}</h3>

            <div class="flex flex-col gap-1 text-sm px-6 mb-1">
                <p>Dibuat oleh <span class="font-semibold">{{ $data->author->name }}</span></p>
                <p>{{ getFullDateTime($data->created_at) }}</p>
                <p class="flex items-center gap-1">
                    <i class="{{ $data->is_active == true ? 'text-green-600 fa-solid fa-circle-check' : 'text-red-500 fa-solid fa-xmark' }}"></i>
                    <span>{{ $data->is_active == true ? 'Aktif' : 'Tidak Aktif' }}</span>
                </p>
            </div>
        </div>
        <div class="py-3 rounded-xl bg-white">
            <h2 class="px-6 font-semibold text-xl pb-3">Kata Kunci</h2>
            <div class="border-b border-slate-400"></div>
            <h4 class="pt-3 px-6 mb-1 break-words">{{ $data->keywords }}</h4>
        </div>
        <div class="py-3 rounded-xl bg-white">
            <h2 class="px-6 font-semibold text-xl pb-3">Subjek</h2>
            <div class="border-b border-slate-400"></div>
            <h4 class="pt-3 px-6 mb-1 break-words">{{ $data->subject }}</h4>
        </div>
    </div>
    
    <div class="w-2/3">
        <div class="bg-white py-3 rounded-xl">
            <div class="pb-3 px-6 flex justify-between items-center">
                <h3 class="font-semibold text-xl">Deskripsi</h3>
                <span class="text-gray-700"><i class="fa-solid fa-eye"></i>&nbsp;&nbsp;{{ formatNumber($data->views) }}</span>
            </div>
            <div class="w-full border-slate-400 border-b"></div>
            <div class="pt-3 px-6">
                <img class="mb-3 w-full aspect-video rounded-md border border-slate-300" src="{{ url($data->image) }}" alt="">
                <p class="leading-relaxed">{!! $data->description !!}</p>
            </div>
        </div>
    </div>
    
    </div>
</div>
