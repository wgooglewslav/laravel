@extends('layouts.main')
@section('content')
    <body>
    <div>
        <form action="{{route('stores.store')}}" method="post">
            <div>@csrf

                <input value="{{ old('title') }}" class="form-control form-control-lg" id="title" name="title"
                       type="text" placeholder="Title" aria-label=".form-control-lg example">
                @error('title')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input value="{{ old('content') }}" class="form-control form-control-lg" id="content" name="content"
                       type="text" placeholder="Content" aria-label=".form-control-lg example">
                @error('content')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input value="{{ old('image') }}" class="form-control form-control-lg" id="image" name="image"
                       type="text" placeholder="Image" aria-label=".form-control-lg example">
                @error('image')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <input value="{{ old('likes') }}" class="form-control form-control-lg" id="likes" name="likes"
                       type="number" placeholder="Likes" aria-label=".form-control-lg example">
                @error('likes')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="category_id">Category</label>
                <select class="form-select" multiple aria-label="Category" name="category_id">
                    @foreach($categories as $category)
                        <option {{old('category_id') == $category->id ? 'selected' : ''}}
                                value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                <div>
                    <label for="tags">Tags</label>
                    <select class="form-select" multiple aria-label="Tags" name="tags[]">
                        @foreach($tags as $tag)
                            <option selected value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    </body>
@endsection
