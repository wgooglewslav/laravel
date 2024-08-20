@extends('layouts.main')
@section('content')
<div>
    @foreach($store as $stores)
    {{$stores->title}}
    @endforeach
</div>
@endsection
