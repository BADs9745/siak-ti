<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatans = Jabatan::latest()->paginate(10);
        return view("dashboard.jabatan.index", compact("jabatans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_jabatan' => 'required|unique:jabatans',
            'nama_jabatan' => 'required',
            'keterangan' => 'nullable'
        ]);
        Jabatan::create($validated);
        return redirect('/dashboard-jabatan')->with('pesan', 'Data Berhasil di Tambahkan');
    }


    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $jabatans = Jabatan::find($id);
        return view('dashboard.jabatan.edit', compact('jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'kode_jabatan' => 'required',
            'nama_jabatan' => 'required',
            'keterangan' => 'required',
        ]);
        Jabatan::where('id', $id)->update($validated);
        return redirect('dashboard-jabatan')->with('pesan', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jabatan::destroy($id);
        return redirect('/dashboard-jabatan')->with('pesan', 'Data Berhasil di Hapus');
    }
}
