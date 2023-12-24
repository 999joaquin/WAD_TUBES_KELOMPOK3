@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Informasi Dokter</h2>
        <a href="{{ route('informasidokter.create') }}" class="btn btn-primary mb-3">Tambah Informasi Dokter</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Keahlian</th>
                    <th>Riwayat Pendidikan</th>
                    <th>Penghargaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informasidokter as $infodokter)
                    <tr>
                        <td>{{ $infodokter->gambar }}</td>
                        <td>{{ $infodokter->nama }}</td>
                        <td>{{ $infodokter->keahlian }}</td>
                        <td>{{ $infodokter->riwayatpendidikan }}</td>
                        <td>{{ $infodokter->penghargaan }}</td>
                        <td>
                            <a href="{{ route('informasidokter.show', $infodokter->nama) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('informasidokter.edit', $infodokter->nama) }}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus rekam medis ini?')">Hapus</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
