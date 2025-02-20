@extends('layouts.admin')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5>Edit</h5>
                        <a href="{{ route('user.index') }}" class="btn btn-grd-primary px-4">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="p-3">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Username</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name', $user->name) }}" placeholder="Username" required>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email', $user->email) }}" placeholder="Email" required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                            placeholder="Password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="isAdmin" class="form-label">Select Role</label>
                                        <select class="form-control" name="isAdmin" id="isAdmin" required>
                                            <option value="0" {{ old('isAdmin', $user->isAdmin) == 0 ? 'selected' : '' }}>User</option>
                                            <option value="1" {{ old('isAdmin', $user->isAdmin) == 1 ? 'selected' : '' }}>Admin</option>
                                        </select>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-grd-primary px-4">Simpan</button>
                                        <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
