<!-- posts/index.blade.php -->
@extends('layouts.default')

@section('content')
    <div class="container">

        <!-- Menggunakan $posts di sini -->
        @forelse($posts as $post)
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
            </div>
        @empty
        @endforelse

    </div>
@endsection
