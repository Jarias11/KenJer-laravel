<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.head')
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
    <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')
    <section class="main pt-3">
        <div class="container pt-5" style="padding: 0;">
            @foreach ($tags as $tag)
            @php
            $carouselId = 'carousel_' . $tag->id;
            @endphp
            <div class="carousel-container pb-2 pt-3">
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
                                    <img src="{{ asset($image->path) }}" class="d-block w-100" alt="{{ $image->description }}" data-toggle="modal" data-target="#imageModalLarge" data-src="{{ asset($image->path) }}" data-id="{{ $image->id }}">
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
    <!-- Modal -->
    <div class="modal fade" id="imageModalLarge" tabindex="-1" aria-labelledby="imageModalLargeLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" id="modalBody">
                    @can('admin')
                    <button class="close-button" id="deleteImageButton">X</button>
                    @endcan
                    <img src="" id="modalImageLarge" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
    @can('admin')

    @include('partials.gallery_forms')

    @endcan

    <script>
        $('#imageModalLarge').on('show.bs.modal', function(event) {
            var img = $(event.relatedTarget); // Image that triggered the modal
            var src = img.data('src'); // Extract info from data-* attributes
            var id = img.data('id'); // Extract image ID
            var modal = $(this);
            modal.find('#modalImageLarge').attr('src', src);
            modal.find('#deleteImageButton').data('id', id); // Set the image ID on the delete button
        });
        $('#modalBody').on('click', function() {
            $('#imageModalLarge').modal('hide');
        });


        $('#deleteImageButton').on('click', function() {
            var id = $(this).data('id'); // Get the image ID from the button
            if (id === undefined) {
                alert('Image ID is undefined');
                return;
            }
            $.ajax({
                url: '/delete-image/' + id,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(result) {
                    // On success, remove the image from the carousel and close the modal
                    $('img[data-id="' + id + '"]').closest('.col').remove();
                    $('#imageModalLarge').modal('hide');
                },
                error: function(xhr, status, error) {
                    // Handle error
                    alert('Error deleting image: ' + error);
                }
            });
        });
    </script>
</body><br><br>

@include('partials.footer')
