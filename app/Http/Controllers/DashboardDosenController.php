<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\Prodi;
use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosens = Dosen::latest()->paginate(10);
        return view('dashboard.dosen.index', ['dosens' => $dosens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dosen.create', ['prodis' => Prodi::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|unique:dosens',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'alamat' => 'required',
        ]);

        dosen::create($validated);

        return redirect('/dashboard-dosen');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dashboard.dosen.detail', compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dosen = Dosen::find($id);
        $prodis = Prodi::all();
        $jabatans = Jabatan::all();
        return view('dashboard.dosen.edit', compact('dosen', 'prodis', 'jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'prodi_id' => 'required',
            'jabatan_id' => 'required',
            'alamat' => 'required',
        ]);

        Dosen::where('id', $id)->update($validated);
        return redirect('dashboard-dosen')->with('pesan', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Dosen::destroy($id);
        return redirect('/dashboard-dosen')->with('pesan', 'Data Berhasil di Hapus');
    }
}
