@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <img class='w-100' src="{{ asset('storage' . '/' .$post->image)}}">
        </div>
        <div class="col-4">
            <h3>{{$post->user->username}}</h3>
            <h4>{{$post->caption}}</h4>
        </div>
    </div>
</div>

@endsection
