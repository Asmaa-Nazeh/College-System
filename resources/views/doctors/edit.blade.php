@extends('adminlte::page')

@section('title', 'Edit Doctor')

@section('content_header')
    <h1 class="text-center text-warning">Edit Doctor</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $doctor->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" value="{{ $doctor->email }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" value="{{ $doctor->phone }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="">-- Select Gender --</option>
                        <option value="male" {{ $doctor->gender == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ $doctor->gender == 'female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" name="salary" value="{{ $doctor->salary }}" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-warning">Update Doctor</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
