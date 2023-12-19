@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Patient Details</h2>
        <p><strong>Name:</strong> {{ $patient->name }}</p>
        <p><strong>Email:</strong> {{ $patient->email }}</p>
        <!-- show more disini nanti -->
        <a href="{{ route('patients.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
