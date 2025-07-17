@extends('adminlte::page')

@section('title', 'Edit Course')

@section('content_header')
    <h1 class="text-center text-warning">Edit Course</h1>
@stop

@section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('courses.update', $course->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" value="{{ $course->name }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Code</label>
                    <input type="text" name="code" value="{{ $course->code }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $course->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Hours</label>
                    <input type="number" name="hours" value="{{ $course->hours }}" class="form-control" required>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-warning">Update Course</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
