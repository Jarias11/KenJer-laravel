<div class="container">
    @foreach ($tags as $tag)
    <h3>{{ $tag->name }}</h3>
    <div>
        @foreach ($tag->images as $image)
        <img src="{{ asset($image->path) }}" alt="{{ $image->description }}" style="width: 100px; height: auto;">
        @endforeach
    </div>
    @endforeach
</div>
