@extends('layouts.app')

@section('title', 'Author - ' . $author->name)

@section('content')
<div class="jumbotron border-round-0 min-50vh" style="background-image:url(https://images.unsplash.com/photo-1522204657746-fccce0824cfd?auto=format&fit=crop&w=1500&q=80);">
</div>

<div class="container mb-4">
    <img src="{{ asset('assets/img/av.png') }}" class="mt-neg100 mb-4 rounded-circle" width="128">
    <h1 class="font-weight-bold title">{{ $author->name }}</h1>
    <p>{{ $author->bio ?? 'This author has no bio.' }}</p>
</div>

<div class="container-fluid mb-5">
    <div class="row">
        <div class="card-columns">
            @forelse ($posts as $post)
                <div class="card card-pin">
                    <img class="card-img" src="{{ $post->image_url }}" alt="Card image">
                    <div class="overlay">
                        <h2 class="card-title title">{{ $post->title }}</h2>
                        <div class="more">
                            <a href="{{ route('post.show', $post->id) }}">
                                <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> More
                            </a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="mx-auto">No posts yet from this author.</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
