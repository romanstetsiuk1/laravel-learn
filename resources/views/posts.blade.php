@extends('layouts.main')
@section('content')
    <div>Posts view</div>
    @foreach($posts as $post)
        <div>{{$post->title}}</div>
    @endforeach
@endsection