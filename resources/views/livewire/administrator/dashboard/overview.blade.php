<div>
    <div class="p-5 bg-white rounded-xl shadow-md flex flex-col gap-4">
        <div class="flex justify-center text-xl font-semibold">Overview
        </div>
        <div class="flex justify-around gap-4">
            @can('view-users')
                <a wire:navigate href="{{ route('administrator.users') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-blue-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-blue-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-users fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">User</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $user }}</div>
                </a>
            @endcan
            @can('view-roles')
                <a wire:navigate href="{{ route('administrator.roles') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-orange-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-orange-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-shield fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">Role</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $role }}</div>
                </a>
            @endcan
        </div>
        <div class="flex justify-around gap-4">
            @can('view-product')
                <a wire:navigate href="{{ route('administrator.products') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-green-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-green-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-cart-shopping fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">Product</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $product }}</div>
                </a>
            @endcan
            @can('view-product-category')
                <a wire:navigate href="{{ route('administrator.products.category') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-blue-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-blue-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-layer-group fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">Product Category</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $product_category }}</div>
                </a>
            @endcan
        </div>
        <div class="flex justify-around gap-4">
            @can('view-news')
                <a wire:navigate href="{{ route('administrator.products') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-green-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-green-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-newspaper fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">News</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $news }}</div>
                </a>
            @endcan
            @can('view-news-category')
                <a wire:navigate href="{{ route('administrator.products.category') }}"
                    class="group cursor-pointer w-1/2 h-20 p-4 flex flex-row justify-between rounded-xl bg-gray-100 hover:bg-blue-200 hover:shadow-md transition-all duration-300">
                    <div class="flex items-center gap-2">
                        <div class="bg-blue-200 p-4 rounded-lg group-hover:bg-white transition-all duration-300"><i
                                class="fa-solid fa-layer-group fa-lg text-indigo-950"></i></div>
                        <div class="font-bold">News Category</div>
                    </div>
                    <div
                        class="flex items-center font-bold text-4xl group-hover:scale-150 transition-all duration-300 group-hover:font-thin group-hover:text-5xl">
                        {{ $news_category }}</div>
                </a>
            @endcan
        </div>
    </div>
</div>
