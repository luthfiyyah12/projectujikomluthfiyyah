@extends('layouts.admin')

@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
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
            @endforeach
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endpush
