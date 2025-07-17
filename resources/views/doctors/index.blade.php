@extends('adminlte::page')

@section('title', 'Doctors')

@section('content_header')
    <h1 class="text-primary">Doctors List</h1>
@stop

@section('content')
    <div class="mb-3">
        <a href="{{ route('doctors.create') }}" class="btn btn-success">+ Add Doctor</a>
    </div>

    <table class="table table-bordered table-striped shadow">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($doctors as $doctor)
            <tr>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->phone }}</td>
                <td>{{ $doctor->gender }}</td>
                <td>{{ $doctor->salary }}</td>
                <td>
                    <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No doctors found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
@stop
