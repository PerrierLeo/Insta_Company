@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4 text-center">
            <img class='rounded-circle' src="{{ asset('pictures/logo_small_icon_only.png')}}">
        </div>
        <div class="col-8 pt-5">
            <div class="d-flex align-items-baseline">
                <div class="h3 pr-5"><strong>#{{$user->username}}</strong></h2></div>
                <button class='btn btn-primary sm'>contacter</button>
            </div>
            <div class='mt-3'>
                <div class='h5 font-weight-bold'>{{$user->posts->count()}} Projet(s)</div>
                <div class='h5 font-weight-bold'>{{$user->profile->title}}</div>
                <div class='h6'>{{$user->profile->description}}</div>
                <div class='h6'><a href='{{$user->profile->link}}'> <img  src='{{asset('Pictures/github.svg')}}'></div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @foreach ($user->posts as $post)
        <div class="col-6 mt-4">
            <img class='w-100 h-100' src="{{ asset('storage') . '/' .$post->image}}">
        </div>

        @endforeach
    </div>

    </div>
</div>
@endsection