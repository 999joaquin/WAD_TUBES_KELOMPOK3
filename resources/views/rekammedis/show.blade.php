@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Detail Rekam Medis</h2>
        <div>
            <strong>Nama Pasien:</strong> {{ $rekammedis->namaPasien }} <br>
            <strong>Umur:</strong> {{ $rekammedis->umur }} <br>
            <strong>Tanggal Rekam Medis:</strong> {{ $rekammedis->tglRekamMedis }} <br>
            <strong>Diagnosis:</strong> {{ $rekammedis->diagnosis }} <br>
            <strong>Catatan:</strong> {{ $rekammedis->catatan }} <br>
        </div>
        <a href="{{ route('rekammedis.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
