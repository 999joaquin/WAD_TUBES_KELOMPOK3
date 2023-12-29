@extends('layouts.app')

@section('content')

{{-- @if ($errors->any())
<div class='pt-3'>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif --}}

    <div class="container mt-4">
        <h2>{{ isset($informasidokter) ? 'Edit Dokter' : 'Tambah Dokter' }}</h2>
        <form action="{{ isset($informasidokter) ? route('informasidokter.update', $informasidokter->idDokter) : route('informasidokter.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($informasidokter))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="idDokter">ID Dokter</label>
                <input type="text" class="form-control" id="idDokter" name="idDokter" value="{{ isset($informasidokter) ? $informasidokter->idDokter : '' }}" required>
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" value="{{ isset($informasidokter) ? $informasidokter->fotox : '' }}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($informasidokter) ? $informasidokter->nama : '' }}" required>
            </div>
            <div class="form-group">
                <label for="spesialis">Spesialis</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{ isset($informasidokter) ? $informasidokter->spesialis : '' }}" required>
            </div>

            <div class="form-group">
                <label for="riwayatpendidikan">Riwayat Pendidikan</label>
                <input type="text" class="form-control" id="riwayatpendidikan" name="riwayatpendidikan" value="{{ isset($informasidokter) ? $informasidokter->riwayatpendidikan : '' }}" required>
            </div>
            <div class="form-group">
                <label for="penghargaan">Penghargaan</label>
                <input type="text" class="form-control" id="penghargaan" name="penghargaan" value="{{ isset($informasidokter) ? $informasidokter->penghargaan : '' }}" required>
            </div>

            {{-- <button type="submit" class="btn btn-primary">{{ isset($informasidokter) ? 'Update' : 'Tambah' }}</button> --}}
            <button type="submit" class="btn btn-primary btn-sm rounded mr-2" href="{{ route('informasidokter.index') }}" onclick="return confirm('Anda yakin ingin menambah dokter ini?')">
                Tambah Data
            </button>
        </button>
    </button>
        </form>
    </div>
@endsection
