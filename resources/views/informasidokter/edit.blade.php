@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ isset($informasidokter) ? 'Edit InformasiDokter' : 'Edit Informasi Dokter' }}</h2>
        <form action="{{ isset($informasidokter) ? route('informasidokter.update', $informasidokter->idDokter) : route('informasidokter.store') }}" method="POST">
            @csrf
            @if (isset($informasidokter))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="idDokter">ID Dokter</label>
                <input type="text" class="form-control" id="idDokter" name="idDokter" value="{{$data->idDokter}}" required>
            </div>
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/* " value="{{$data->foto}}" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{$data->nama}}">

            </div>
            <div class="form-group">
                <label for="spesialis">Spesialis</label>
                <input type="text" class="form-control" id="spesialis" name="spesialis" value="{{$data->spesialis}}" required>
            </div>
            <div class="form-group">
                <label for="riwayatpendidikan">Riwayat Pendidikan</label>
                <input type="text" class="form-control" id="riwayatpendidikan" name="riwayatpendidikan" value="{{$data->riwayatpendidikan}}" required>
            </div>
            <div class="form-group">
                <label for="penghargaan">Penghargaan</label>
                <input type="text" class="form-control" id="penghargaan" name="penghargaan" value="{{$data->penghargaan}}" required>
            </div>
            <!-- Add more fields as needed -->
            <button type="submit" class="btn btn-primary">{{ isset($informasidokter) ? 'Update' : 'Update' }}</button>
        </form>
    </div>
@endsection
