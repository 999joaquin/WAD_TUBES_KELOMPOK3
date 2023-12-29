<?php

namespace App\Http\Controllers;

use App\Models\informasidokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class informasidoktercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasidokters = informasidokter::all();
        return view('informasidokter.index', compact('informasidokters'));
        // ada '.'  sbg penanda direktori dr nama file
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('informasidokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $informasidokter = informasidokter::where('idDokter', auth()->user()->id)->get();
        // if (count($informasidokter) == 1)
        // {
        //     redirect(route('informasidokter.create'));
        // }
        //  $request -> validate([
        //     'idDokter' => ['required', 'integer'],
        //     'foto' => ['required', 'file'],
        //     'nama' => ['required', 'string'],
        //     'spesialis' => ['required', 'string'],
        //     'riwayatpendidikan' => ['required', 'string'],
        //     'penghargaan' => ['required', 'string'],
        //  ]);

        // $data = $request->all();
        // $data['idDokter'] = Auth::user()->idDokter;
        // $foto = fake()->uuid() . '.' . $data['foto']->extension();
        // $request->file('foto')->move(public_path('fotodokter'), $foto);
        // $data['foto'] = "fotodokter/$foto";

        // Pendaftaran::create($data);
        informasidokter::create([
            'idDokter' => $request->idDokter,
            'foto' => $foto_nama,
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'riwayatpendidikan' => $request->riwayatpendidikan,
            'penghargaan' => $request->penghargaan,
        ]);
        // pesan berhasil
        return redirect()->to('informasidokter.create')->with('Berhasil', 'Informasi Dokter Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($idDokter)
    {
        $informasidokter = informasidokter::findOrFail($idDokter);
        return view('informasidokter.show', compact('informasidokter'));
        $data = informasidokter::where('idDokter', $idDokter)->first;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idDokter)
    {
        //$informasidokter = informasidokter::findOrFail($idDokter);
        $data = informasidokter::where('idDokter', $idDokter)->first();
        return view('informasidokter.edit')->with('data', $data);
        return 'Alhamdulillah';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $idDokter)
    {
        // $data = [
        //     'idDokter' => $request->idDokter,
        //     'foto' => $foto_nama,
        //     'nama' => $request->nama,
        //     'spesialis' => $request->spesialis,
        //     'riwayatpendidikan' => $request->riwayatpendidikan,
        //     'penghargaan' => $request->penghargaan,
        // ];
        // $foto_file = $request->file('foto');
        // $foto_ekstensi = $foto_file->extension();
        // $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        // $foto_file->move(public_path('fotodokter'), $foto_nama);

        // if($request->hasfile('foto')){
        //     //file foto taruh di folder
        //     $request->file('foto')->move('fotodokter/', $request->file('foto')->getClientOriginalName());
        //     // ambil berdasarkan nama foto
        //     $data->foto = $request->file('foto')->getClientOriginalName();
        //     $data->save();
        // }

        // pesan berhasil
        // informasidokter::where('idDokter', $idDokter)->update($data);
        informasidokter::find($idDokter)->update([
            'idDokter' => $request->idDokter,
            'foto' => $foto_nama,
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'riwayatpendidikan' => $request->riwayatpendidikan,
            'penghargaan' => $request->penghargaan,
        ]);
        return redirect('informasidokter')->with('success', 'dokter update successfully!');


    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idDokter)
    {
        //mencari data dengan id
        //$data = informasidokter::where('idDokter', $idDokter)->first();
        informasidokter::find($idDokter)->delete;
        //stlh ditemukan idnya bisa delete data
        File::delete(public_path('fotodokter') . '/' . $data -> foto);
        informasidokter::where('idDokter', $idDokter)->delete();
        return redirect('/informasidokter')->with('Berhasil', 'Informasi Dokter berhasil Dihapus!');

    }
}
