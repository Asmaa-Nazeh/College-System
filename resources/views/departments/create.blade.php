@extends('adminlte::page')

@section('title', 'Add Department')

@section('content_header')
    <h1 class="text-center text-success">Add New Department</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('departments.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Department name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Code</label>
                    <input type="text" name="code" class="form-control" placeholder="Department code" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Department description"></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('departments.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Add Department</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
