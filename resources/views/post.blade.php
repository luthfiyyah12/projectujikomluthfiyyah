@extends('layouts.default')

@section('content')
    <div class="container">
        <h2>Posts</h2>

        <!-- Perbaikan: Gunakan $posts untuk iterasi -->
        @forelse($posts as $post)
        @include('components.card-post', ['post' => $post])
            <div class="post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->content }}</p>
            </div>
        @empty
            <p>No posts available.</p>
        @endforelse

        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="card mb-4">
                    <img class="card-img-top mb-2" src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=e0245bb4e87077312cc3d102e68c1efd&auto=format&fit=crop&w=735&q=80" alt="Card image">
                    <div class="card-body">
                        <h1 class="card-title display-4">Sushi Rolls</h1>
                        <p class="card-text">
                            In this post, we’ll show you how to make delicious sushi rolls at home. Follow our simple recipe and you’ll be able to create sushi just like the pros!
                        </p>
                        <ul>
                            <li>5 cups short-grain sushi rice</li>
                            <li>6 cups water</li>
                            <li>1/2 cup rice vinegar</li>
                            <li>2 tablespoons sugar</li>
                            <li>A teaspoon of salt</li>
                        </ul>
                        <small class="d-block"><a class="btn btn-sm btn-gray200" href="#"><i class="fa fa-external-link"></i> Visit Website</a></small>
                    </div>
                </article>
            </div>
        </div>
    </div>

    <!-- More Like This Section -->
    <div class="container-fluid mt-5">
        <div class="row">
            <h5 class="font-weight-bold">More like this</h5>
            <div class="card-columns">
                <!-- Perbaikan: Menggunakan $posts untuk iterasi -->
                @forelse($posts as $post)
                    <!-- Menampilkan data postingan -->
                    <div>{{ $post->title }}</div>
                @empty
                    <p>No posts available.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection

@section('style')
    <style>
        .card-pin {
            position: relative;
            overflow: hidden;
            border: none;
            margin-bottom: 1rem;
        }

        .card-pin img {
            width: 100%;
            height: auto;
            display: block;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .card-pin:hover .overlay {
            opacity: 1;
        }

        .overlay .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .overlay .more a {
            color: white;
            font-size: 1.1rem;
            text-decoration: none;
        }

        .overlay .more a:hover {
            text-decoration: underline;
        }

        .card-columns {
            column-count: 3;
            column-gap: 1rem;
        }

        @media (max-width: 768px) {
            .card-columns {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .card-columns {
                column-count: 1;
            }
        }
    </style>
@endsection
