@extends('layouts.main')

@section('title', 'Post - Pinterest Style')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
    </div>
    <div class="col-md-4">
        <div class="sidebar">
            <h3>Related Posts</h3>
            <!-- Related posts content -->
        </div>
    </div>
</div>
@endsection
