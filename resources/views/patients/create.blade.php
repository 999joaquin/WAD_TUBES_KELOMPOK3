@extends('layouts.app')

@section('content')

    <div class="container mt-4">
        <h2>{{ isset($patient) ? 'Edit Patient' : 'Daftar Pasien' }}</h2>
        <form action="{{ isset($patient) ? route('patients.update', $patient->id) : route('patients.store') }}" method="POST">
            @csrf
            @if (isset($patient))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ isset($patient) ? $patient->name : '' }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ isset($patient) ? $patient->email : '' }}" required>
            </div>

            <div class="form-group">
                <label for="phone">No Telp:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ isset($patient) ? $patient->phone : '' }}" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat:</label>
                <textarea class="form-control" id="address" name="address" rows="3">{{ isset($patient) ? $patient->address : '' }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">{{ isset($patient) ? 'Update' : 'Add' }}</button>
        </form>
    </div>
@endsection
