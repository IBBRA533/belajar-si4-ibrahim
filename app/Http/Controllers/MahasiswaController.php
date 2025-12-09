<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // nanti bisa kamu isi ambil data dari database
        return view('Mahasiswa.mahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // VALIDASI
        $validated = $request->validate(
            [
                'npm'            => 'required|unique:mahasiswas,npm',
                'nama_mahasiswa' => 'required',
                'jenis_kelamin'  => 'required',
                'tanggal_lahir'  => 'required|date',
                'alamat'         => 'required',
            ],
            [
                'npm.required'            => 'NPM wajib diisi',
                'npm.unique'              => 'NPM sudah terdaftar',
                'nama_mahasiswa.required' => 'Nama Mahasiswa wajib diisi',
                'jenis_kelamin.required'  => 'Jenis Kelamin wajib diisi',
                'tanggal_lahir.required'  => 'Tanggal Lahir wajib diisi',
                'tanggal_lahir.date'      => 'Tanggal Lahir tidak valid',
                'alamat.required'         => 'Alamat wajib diisi',
            ]
        );

        // SIMPAN KE DB
        Mahasiswa::create($validated);

        return redirect('/mahasiswa')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
