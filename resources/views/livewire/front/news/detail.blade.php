<div class="relative overflow-hidden">

    <div class="absolute -z-10 top-0 right-0 scale-90 md:scale-150 translate-x-52 -translate-y-48 flex flex-col">
        <div class="relative h-[400px] w-[400px]">
            <img class="w-full h-full" src="{{ asset('assets/images/default/decoration/circle.svg') }}" alt="">
            <div class="absolute h-[400px] w-[400px] bottom-0 right-0 translate-x-14 translate-y-32">
                <img class="w-full h-full" src="{{ asset('assets/images/default/decoration/circle.svg') }}" alt="">
            </div>
        </div>
        
        
    </div>
    <div class="w-full flex flex-col px-10 md:px-[120px] py-10 md:py-20 ">
        <div class="mb-5 md:mb-10">
            <h1 class="font-nunito drop-shadow-md text-4xl md:text-5xl text-primary font-semibold mb-3 text-left md:text-center">{{ $data->title }}</h1>
            <p class="md:text-center font-poppins text-md md:text-lg text-gray-500">Posted by <span class="font-bold">{{ $data->author->name }}</span> {{ dateTimeTranslated($data->published_at) }}</p>
            <p class="md:text-center font-poppins italic text-lg md:text-xl text-primary-dark">{{ $data->subject ?: ''  }}</p>
        </div>
        
        <img class="h-auto w-full object-center md:max-h-[700px] object-contain" src="{{ url($data->image) }}" alt="">
        <div class="mt-6 flex flex-col w-full gap-5">
            
            <div class="font-poppins text-gray-800 text-lg leading-relaxed">
                {!! $data->description ?: 'Tidak ada deskripsi' !!}
            </div>
        </div>
    </div>
</div>