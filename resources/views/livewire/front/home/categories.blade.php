<div>
    <div class="bg-orange-900 p-20 lg:p-56">

        <!-- Title -->
        <div class="w-full flex justify-center mb-40">
            <h1 class="text-yellow-400 my-0 drop-shadow-md">
                Categories
            </h1>
        </div>

        <!-- Foreach -->
        <div class="w-full flex justify-center">
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-20">
                @foreach ($datas as $data)
                    <div class="col-span-1" data-aos="fade-up" data-aos-duration="2000" data-aos-once="true">
                        <div class="overflow-hidden">
                            <a href="{{ route('product.category', $data->slug) }}">
                                <img class="hover:translate-y-7 transition-all rounded-xl object-cover aspect-[3/4]"
                                    src="{{ url($data->image) }}" alt="">
                            </a>
                        </div>

                        <div class="text-center text-gray-200">
                            <h2 class="my-3 text-yellow-400 drop-shadow-md">{{ $data->name }}</h2>
                            <p>{{ $data->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div>
