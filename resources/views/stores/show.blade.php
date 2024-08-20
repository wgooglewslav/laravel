@extends('layouts.main')
@section('content')
    <body>

       <div><b>ID: </b>{{$post->id}}</div>
        <div><b>TITLE: </b> {{$post->title}}</div>
         <div><b>IMAGE: </b> {{$post->image}}</div>
       <div><b>LIKES: </b> {{$post->likes}}</div>
       <div><b>CATEGORY: </b> {{$post->category_id}}</div>
       <div><b>TAGS: </b> {{$post->tags}}</div>


       <div>
        <a href="{{route('stores.index')}}" class="btn btn-primary">Back</a>
        <a href="{{route('stores.edit', $post->id)}}" class="btn btn-primary">Edit</a>
        <form action="{{route('stores.destroy', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>

        </form>

</div>
</body>
@endsection
