<h1>Manage Images</h1>
<a href="{{ route('admin.images.create') }}" class="btn btn-success">Upload Images</a>
<table class="table mt-4">
    <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Images</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($images as $images)
            <tr>
                <td>{{ $images->id }}</td>
                <td>{{ $images->title }}</td>
                <td><img src="{{ asset('storage/images/'.$images->images_name) }}" width="50"></td>
                <td><a href="#">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
