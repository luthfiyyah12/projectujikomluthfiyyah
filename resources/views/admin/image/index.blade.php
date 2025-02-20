<h1>Manage Images</h1>
<a href="{{ route('admin.images.create') }}" class="btn btn-success">Upload Image</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>{{ $image->title }}</td>
                <td><img src="{{ asset('storage/images/'.$image->image_name) }}" width="50"></td>
                <td><a href="#">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
