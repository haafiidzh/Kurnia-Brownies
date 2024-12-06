<div>
    <div class="masonry">

        <div class="bricks-wrapper" data-animate-block>

            <div class="grid-sizer"></div>

            @foreach ($datas as $data)
            <article class="brick entry" data-animate-el>
        
                <div class="entry__thumb">
                    <a href="{{ route('product.detail', $data->slug) }}" class="thumb-link">
                        <img 
                        src="{{ Str::startsWith($data->image, 'https://') ? $data->image : Storage::url($data->image) }}" 
                        style="width: 400px; height auto; object-fit: cover;">
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

    <div>
        {{ $datas->links('vendor.pagination.front') }}
    </div>
</div>
