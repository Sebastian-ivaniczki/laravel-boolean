@extends('/layouts.main')
@section('content')
<div class="container pad bg-white rounded mt-5">
    <form action="{{route('eggs.update', $egg->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="d-flex justify-content-between text-center">
            <div class="mb-3 ">
                <label for="name" class="form-label h5">Name</label>
                <input type="text" placeholder="egg name" class="form-control" value="{{old('name', $egg->name)}}" id="name" name="name" required>
            </div>
            <div class="mb-3 ">
                <label for="chocolate_type" class="form-label h5">Chocolate Type</label>
                <input type="text" placeholder="egg chocolate_type" class="form-control" value="{{old('chocolate_type', $egg->chocolate_type )}}" id="chocolate_type" name="chocolate_type" required>
            </div>
            <div class="mb-3 ">
                <label for="content" class="form-label h5">Egg's Content</label>
                <input type="text" placeholder="egg content" value="{{old('content', $egg->content)}}" class="form-control" id="content" name="content" required>
            </div>
            <div class="mb-3 ">
                <label for="color" class="form-label h5">Package Color</label>
                <input type="text" placeholder="Package color" class="form-control w-75" id="color" value="{{old('color', $egg->color)}}" name="color" required>
            </div>
            <div>
                <label for="size" class="form-label h5">Size</label>
                <select name="size" class="form-select" aria-label="size">
                    <option @if (old('size', $egg->size) === 'Big') selected @endif>Big</option>
                    <option @if (old('size', $egg->size) === 'Medium') selected @endif>Medium</option>
                    <option @if (old('size', $egg->size) === 'Small') selected @endif>Small</option>
                </select>
            </div>
        </div>
        <div class="mb-3 ">
            <label for="content_thumb" class="form-label h5">Content egg image</label>
            <input type="text" placeholder="Image URL" class="form-control" value="{{old('content_thumb', $egg->content_thumb)}}" id="content_thumb" name="content_thumb" required>
        </div>
        <div class="mb-3 ">
            <label for="main_thumb" class="form-label h5">Egg's image</label>
            <input type="text" placeholder="Image URL" class="form-control" value="{{old('main_thumb', $egg->main_thumb)}}" id="main_thumb" name="main_thumb" required>
        </div>
        <div class="d-flex justify-content-center my-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

    </form>
</div>
@endsection