@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Informasi Dokter</h2>
        <p>
            <img src = "{{ asset('fotodokter/'.$informasidokter->foto)}}" alt="" style="width: 500px; ">
        </p>
        <p><strong>{{ $informasidokter->nama }}</strong> </p>
        <p><strong>Spesialis:</strong> {{ $informasidokter->spesialis }}</p>
        <p><strong>Riwayat Pendidikan:</strong> {{ $informasidokter->riwayatpendidikan }}</p>
        <p><strong>Penghargaan:</strong> {{ $informasidokter->penghargaan }}</p>

        <!-- show more disini nanti -->

        <a href="{{ route('informasidokter.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
