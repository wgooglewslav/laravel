@extends('layouts.main')
@section('content')
<body>
<div>@foreach($store as $stores)
<div><b><a href="{{route('stores.show', $stores->id)}}">{{$stores->id}}</a>.</b> {{$stores->title}}</div>
</div>

@endforeach
</body>
@endsection
