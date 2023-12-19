<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // nunjukkin list pasien yang terdaftar
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // view form create
    public function create()
    {
        return view('patients.create');
    }

    // menyimpan pasien yang daftar ke db
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string',
            // tambahin attribut lain kalo mau
        ]);
    
        $patient = new Patient();
        $patient->name = $validatedData['name'];
        $patient->email = $validatedData['email'];
        $patient->phone = $validatedData['phone'];
        $patient->address = $validatedData['address'];
        // tambahin attribut lain kalo mau
        $patient->save();
    
        return redirect()->route('patients.index')->with('success', 'Patient created successfully.');
    }
    // Buat nunjukkin pasien tertentu
    public function show($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.show', compact('patient'));
    }

    // view buat edit pasien yang terdaftar
    public function edit($id)
    {
        $patient = Patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
    }

    // Buat update pasien yang datanya harus diedit
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:patients,email,'.$id,
            // tambahin variabel lain kalo mau
        ]);

        Patient::whereId($id)->update($validatedData);

        return redirect('/patients')->with('success', 'Patient updated successfully!');
    }

    // Buat delete data pasien yang uda terdaftar
    public function destroy($id)
    {
        Patient::findOrFail($id)->delete();
        return redirect('/patients')->with('success', 'Patient deleted successfully!');
    }
}
