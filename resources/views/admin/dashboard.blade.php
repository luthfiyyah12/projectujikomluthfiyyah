@extends('layouts.admin')

@section('content')
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <h1>Welcome to Admin Dashboard</h1>
        <p>This is where you can manage users and other settings.</p>
        <p>
            <a href="{{ route('admin.dashboard') }}">Go to Admin Dashboard</a>
        </p>
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }} ({{ $user->email }})</li>
            @endforeach
        </ul>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">PictPocket Style Index</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('user.create')}}" class="btn btn-grd-primary px-4">Add Data</a>
            </div>
        </div>
    </div>

    <h6 class="mb-0 text-uppercase">PictPocket Style User Grid</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row">
                @foreach ($users as $data)
                    @if ($data->isAdmin == 1)  <!-- Menampilkan hanya admin -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="User Image">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data->name }}</h5>
                                    <p class="card-text">{{ $data->email }}</p>
                                    <p class="card-text">
                                        <strong>{{ $data->isAdmin == 1 ? 'Admin' : 'User' }}</strong>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{route('user.edit', $data->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                        @if ($data->isAdmin != 1)
                                            <form action="{{route('user.destroy', $data->id)}}" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        @else
                                            <button class="btn btn-sm btn-danger" disabled>Can't Delete</button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
