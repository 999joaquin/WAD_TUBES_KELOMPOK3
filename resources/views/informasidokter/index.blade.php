@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Dokter</h2>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
        {{-- <button class="btn btn-primary btn-sm rounded mr-2" onclick="window.location.href='{{ route('informasidokter.create') }}'"> --}}
        <i class="bi bi-plus-lg"></i>
        Tambah Dokter
        </button>
        <p></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>ID Dokter</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Dibuat</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = $informasidokter->firstitem() ?>
                @foreach ($informasidokter as $infodokter)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $infodokter->idDokter }}</td>
                        <td>
                            <img src="{{ $infordokter->foto }}" alt="No Image" width="450 px" height="660 px"/></td>
                        </td>
                        <td>{{ $infodokter->nama }}</td>
                        <td>{{ $infodokter->spesialis }}</td>
                        <td>{{ $infodokter->created_at -> format ('D M Y') }}</td>
                        <?php $i++ ?>
                        <td>
                            <div class="btn-group" role="group" aria-label="Dokter Actions">
                                <button class="btn btn-primary btn-sm rounded mr-2" onclick="window.location.href='{{ route('informasidokter.show', $infodokter->idDokter) }}'">
                                <i class="bi bi-eye"></i>
                                View
                                </button>
                                <button class="btn btn-warning btn-sm rounded mr-2" onclick="window.location.href='{{ route('informasidokter.edit', $infodokter->idDokter) }}'">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                                </button>
                                <form action="{{ '/informasidokter/'.$infodokter->idDokter }}" method='post'>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm rounded mr-2" onclick="return confirm('Anda yakin ingin menghapus dokter ini?')">
                                <i class="bi bi-trash3"></i>
                                Hapus
                                </button>
                            </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection

