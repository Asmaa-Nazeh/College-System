@extends('adminlte::page')

@section('title', 'Add Course')

@section('content_header')
    <h1 class="text-center text-success">Add New Course</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('courses.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Course name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Code</label>
                    <input type="text" name="code" class="form-control" placeholder="Course code" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Course description"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hours</label>
                    <input type="number" name="hours" class="form-control" placeholder="Credit hours" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-success">Add Course</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
