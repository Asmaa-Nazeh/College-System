@extends('adminlte::page')

@section('title', 'Add Doctor')

@section('content_header')
    <h1 class="text-center text-primary">Add New Doctor</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('doctors.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select" required>
                        <option value="">-- Select Gender --</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Salary</label>
                    <input type="number" name="salary" class="form-control" placeholder="Enter salary" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Add Doctor</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
