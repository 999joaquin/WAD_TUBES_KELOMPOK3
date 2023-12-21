@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Daftar Rekam Medis</h2>
        <a href="{{ route('rekammedis.create') }}" class="btn btn-success mb-3">Tambah Rekam Medis</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pasien</th>
                    <th>Umur</th>
                    <th>Tanggal Rekam Medis</th>
                    <th>Diagnosis</th>
                    <th>Catatan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rekammedis as $r)
                    <tr>
                        <td>{{ $r->namaPasien }}</td>
                        <td>{{ $r->umur }}</td>
                        <td>{{ $r->tglRekamMedis }}</td>
                        <td>{{ $r->diagnosis }}</td>
                        <td>{{ $r->catatan }}</td>
                        <td>
                            <a href="{{ route('rekammedis.show', $r->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('rekammedis.edit', $r->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('rekammedis.destroy', $r->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus rekam medis ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
