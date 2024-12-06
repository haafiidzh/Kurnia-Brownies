@if ($paginator->hasPages())

    <!-- pagination -->
    <div class="row pagination">
        <div class="column lg-12">
            <nav class="pgn">
                <ul>
                    <li>
                        @if ($paginator->onFirstPage())
                        <div class="pgn__prev " href="#0">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M19.25 12H5"></path>
                            </svg>
                        </div>
                        @else
                            <a href="{{ $paginator->previousPageUrl() }}" class="pgn__prev" href="#0">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19.25 12H5"></path>
                                </svg>
                            </a>
                        @endif
                    @foreach ($elements as $element)
                        @if (is_string($element))
                            <!-- "Three Dots" Separator -->
                            <li class="pgn__num">{{ $element }}</li>
                        @endif

                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><span class="pgn__num current">{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}" class="pgn__num">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    <li>
                        @if ($paginator->hasMorePages())
                            <a href="{{ $paginator->nextPageUrl() }}"
                                class="pgn__next" href="#0">
                                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" d="M19 12H4.75"></path>
                                </svg>
                            </a>
                        @else
                        <div
                            class="pgn__next" href="#0">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M13.75 6.75L19.25 12L13.75 17.25"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="M19 12H4.75"></path>
                            </svg>
                        </div>
                        @endif
                    </li>
                </ul>
            </nav> <!-- end pgn -->
        </div> <!-- end column -->
    </div> <!-- end pagination -->

    
@endif
