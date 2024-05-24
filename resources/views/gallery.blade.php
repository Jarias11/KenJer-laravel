<head>
    @include('partials.head')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <section class="main pt-3">
        <div class="container pt-5">
            @foreach ($tags as $tag)
            @php
            $carouselId = 'carousel_' . $tag->id;
            @endphp
            <div class="carousel-container pb-2">
                <h3 class="carousel-title">{{ $tag->name }}</h3>
                <div id="{{ $carouselId }}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($tag->images->chunk(3) as $index => $imageChunk)
                        <li data-target="#{{ $carouselId }}" data-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($tag->images->chunk(3) as $imageChunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="d-flex">
                                @foreach ($imageChunk as $image)
                                <div class="col">
                                    <img src="{{ asset($image->path) }}" class="d-block w-100" alt="{{ $image->description }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#{{ $carouselId }}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#{{ $carouselId }}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    @can('admin')

    @include('partials.gallery_forms')
    
    @endcan
</body><br><br>

@include('partials.footer')
