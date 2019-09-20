@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/freeCodeCampLogo.jpg" alt="freeCodeCampLogo" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $profile->title }}</div>
            <div>{{ $profile->description }}</div>
            <div><a href="#">{{ $profile->url }}</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="/images/instagram-image.jpg" alt="freecodecamp" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/instagram-image.jpg" alt="freecodecamp" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/instagram-image.jpg" alt="freecodecamp" class="w-100">
            </div>        
        </div>
    </div>
</div>
@endsection
