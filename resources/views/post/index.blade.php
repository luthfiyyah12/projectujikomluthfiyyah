<!DOCTYPE html>
<html>
<head>
    <title>Post Index</title>
</head>
<body>

    <h1>All Posts</h1>

    @if ($posts->isEmpty())
        <p>No posts available.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>{{ $post->title }}</li> <!-- Menampilkan judul dari setiap postingan -->
            @endforeach
        </ul>
    @endif

</body>
</html>
