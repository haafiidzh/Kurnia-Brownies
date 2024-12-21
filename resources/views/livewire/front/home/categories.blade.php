<div>
    <div class="bg-primary p-20 lg:p-56 shadow-inner">

        <!-- Title -->
        <div class="w-full flex justify-center mb-20">
            <h1 class="text-yellow-400 my-0 drop-shadow-md">
                Categories
            </h1>
        </div>

        <div class="flex justify-center">
            <div class="home-categories-swiper w-3/4 sm:w-1/2">
                <div class="swiper-wrapper ">
                    @foreach ($datas as $data)
                        <div class="swiper-slide flex justify-center">
                            <img class="mb-0 rounded-xl" src="{{ url($data->image) }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="text-center mt-20">
            <h3 id="category-name" class="my-0 text-yellow-400 drop-shadow-md"></h3>
            <p id="category-description" class="text-gray-50 font-thin"></p>
        </div>

    </div>
</div>

@push('scripts')
    <script>
        const categories = @json($datas);
        console.log(categories);

        
        document.addEventListener('DOMContentLoaded', () => {
            const firstCategory = categories[0];
            document.getElementById('category-name').textContent = firstCategory.name;
            document.getElementById('category-description').textContent = firstCategory.description;
        });
    </script>
@endpush
