<section>
    <div class="container">
        <div class="row">
            <!-- Add Images Form -->
            <div class="col-md-6">
                <div class="form-container">
                    <h3 class="form-title">Upload Images</h3>
                    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="images">Images:</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                        </div>
                        <div class="form-group">
                            <label for="tag">Tag:</label>
                            <select name="tag" class="form-control">
                                @foreach (\App\Models\tags::all() as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Images</button>
                    </form>
                </div>
            </div>

            <!-- Create New Tag Form -->
            <div class="col-md-6">
                <div class="form-container-dark">
                    <h3 class="form-title">Create New Tag</h3>
                    <form action="{{ route('tags.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Tag Name:</label>
                            <input type="text" name="name" class="form-control" required>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Create Tag</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
