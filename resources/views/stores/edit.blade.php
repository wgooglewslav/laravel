@extends('layouts.main')
@section('content')
<body>
<form action="{{route('stores.update', $post->id)}}" method="post">
    <div>@csrf
        @method('patch')

        <input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Title" value="{{$post->title}}" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" id="content" name="content" type="text" placeholder="Content" value="{{$post->content}}" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" id="image" name="image" type="text" placeholder="Image" value="{{$post->image}}" aria-label=".form-control-lg example">
        <input class="form-control form-control-lg" id="likes" name="likes" type="number" placeholder="Likes" value="{{$post->likes}}" aria-label=".form-control-lg example">
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id" >
            @foreach($categories as $category)
                <option
                        @if($category->id == $post->category_id) selected @endif
                    value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
        <div>
            <label for="tags">Tags</label>
            <select class="form-select" multiple aria-label="Tags" name="tags[]">
                @foreach($tags as $tag)
                    @if($tag->id == $post->tag_id) selected @endif
                    value="{{$tag->id}}">{{$tag->title}}
                    <option selected value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update</button> </form>
</body>
@endsection
