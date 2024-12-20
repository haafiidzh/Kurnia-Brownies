<div class="pt-48">
    <div class="w-full">
        <div class="flex flex-col items-center gap-5">
            <h5 class="my-0 text-gray-600">Our Recommended</h5>
            <h1 class="my-0 text-orange-950 drop-shadow-md">Product</h1>
        </div>
    </div>
    

    <!--  masonry -->
    <div id="bricks" class="bricks">

        <div class="masonry">

            <div class="bricks-wrapper" data-animate-block>
    
                <div class="grid-sizer"></div>
    
                @foreach ($datas as $data)
                <article class="brick entry" data-animate-el>
            
                    <div class="entry__thumb rounded-xl">
                        <a href="{{ route('product.detail', $data->slug) }}" class="thumb-link">
                            <img 
                            class="object-cover aspect-[1/1]"
                            src="{{ url($data->image) }}" >
                        </a>
                    </div> <!-- end entry__thumb -->
            
                    <div class="entry__text">
                        <div class="entry__header">
                            <div class="entry__meta">
                                @if ($data->recommended == true)
                                    <span class="cat-links">
                                        Recommended
                                    </span>
                                @endif
                                <span class="byline">
                                    Category:
                                    <a href="{{ route('product.category', $data->category->slug) }}">{{ $data->category->name }}</a>
                                </span>
                            </div>
                            <h1 class="entry__title"><span>{{ $data->name }}</span></h1>
                         </div>
                        <div class="entry__excerpt">
                            <p>
                            {!! $data->description !!}
                            </p>
                        </div>
                        <a class="entry__more-link" href="{{ route('product.detail', $data->slug) }}">Detail</a>
                    </div> <!-- end entry__text -->
                
                </article> <!-- end article -->
                @endforeach
    
            </div> <!-- end bricks-wrapper -->
    
        </div> <!-- end masonry-->
    
        <div class="tab-12 px-10 md:px-0">
            <div class="column lg-6 tab-12 u-flexitem-center">
                <a class="btn btn--stroke u-fullwidth" href="{{ route('product') }}">Lihat Semua Produk</a>
            </div>
        </div>    

    </div> <!-- end bricks -->
    
</div>
