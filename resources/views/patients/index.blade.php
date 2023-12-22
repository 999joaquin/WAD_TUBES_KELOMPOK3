@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Pasien</h2>
        <a href="{{ route('patients.create') }}" class="btn btn-primary mb-3">Tambah pasien</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Patient Actions">
                                <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info btn-sm rounded mr-2">View</a>
                                <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-primary btn-sm rounded mr-2">Edit</a>
                                <form action="{{ route('patients.destroy', $patient->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
