@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($patient) ? 'Edit Patient' : 'Add Patient' }}</h2>
        <form action="{{ isset($patient) ? route('patients.update', $patient->id) : route('patients.store') }}" method="POST">
            @csrf
            @if (isset($patient))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($patient) ? $patient->name : '' }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ isset($patient) ? $patient->email : '' }}" required>
            </div>
            <!-- Add more fields as needed -->
            <button type="submit" class="btn btn-primary">{{ isset($patient) ? 'Update' : 'Add' }}</button>
        </form>
    </div>
@endsection
