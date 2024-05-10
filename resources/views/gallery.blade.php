<head>
    @include('partials.head')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        @foreach ($tags as $tag)
        <h3>{{ $tag->name }}</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($tag->images as $index => $image)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($tag->images as $image)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset($image->path) }}" class="d-block w-100" alt="{{ $image->description }}">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        @endforeach
    </div>
    <div class="container" id="AddImage">
        <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="tag">Tag:</label>
                <select name="tag" class="form-control">
                    @foreach (\App\Models\tags::all() as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Upload Image</button>
        </form>
    </div>
</body><br><br>

@include('partials.footer')