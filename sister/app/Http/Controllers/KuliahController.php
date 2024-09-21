<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\MataKuliah;
use App\Models\Perkuliahan;


class KuliahController extends Controller
{
    // Mahasiswa
    public function indexMahasiswa()
    {
        $data = Mahasiswa::all();
        return view('data.mahasiswa', compact('data'));
    }

    public function createMahasiswa()
    {
        return view('data.create_mahasiswa');
    }

    public function storeMahasiswa(Request $request)
    {
        $request->validate([
            'nim' => 'required|max:10',
            'nama' => 'required|max:100',
            'alamat' => 'required'
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan.');
    }

    public function editMahasiswa($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        return view('data.edit_mahasiswa', compact('mahasiswa'));
    }

    public function updateMahasiswa(Request $request, $nim)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'alamat' => 'required'
        ]);

        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui.');
    }

    public function destroyMahasiswa($nim)
    {
        $mahasiswa = Mahasiswa::findOrFail($nim);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus.');
    }

    // Dosen
    public function indexDosen()
    {
        $data = Dosen::all();
        return view('data.dosen', compact('data'));
    }

    public function createDosen()
    {
        return view('data.create_dosen');
    }

    public function storeDosen(Request $request)
    {
        $request->validate([
            'nip' => 'required|max:20',
            'nama' => 'required|max:100',
            'nomor_wa' => 'required|max:15'
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan.');
    }

    public function editDosen($nip)
    {
        $dosen = Dosen::findOrFail($nip);
        return view('data.edit_dosen', compact('dosen'));
    }

    public function updateDosen(Request $request, $nip)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'no_wa' => 'required|max:15'
        ]);

        $dosen = Dosen::findOrFail($nip);
        $dosen->update($request->all());
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diperbarui.');
    }

    public function destroyDosen($nip)
    {
        $dosen = Dosen::findOrFail($nip);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil dihapus.');
    }

    // Mata Kuliah
    public function indexMataKuliah()
    {
        $data = MataKuliah::all();
        return view('data.mata_kuliah', compact('data'));
    }

    public function createMataKuliah()
    {
        return view('data.create_matkul');
    }

    public function storeMataKuliah(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|max:10',
            'nama_mk' => 'required|max:100',
            'jml_sks' => 'required|integer',
            'semester' => 'required|integer'
        ]);

        MataKuliah::create($request->all());
        return redirect()->route('mata_kuliah.index')->with('success', 'Mata kuliah berhasil ditambahkan.');
    }

    public function editMataKuliah($kode_mk)
    {
        $mataKuliah = MataKuliah::findOrFail($kode_mk);
        return view('data.edit_matkul', compact('mataKuliah'));
    }

    public function updateMataKuliah(Request $request, $kode_mk)
    {
        $request->validate([
            'nama_mk' => 'required|max:100',
            'jml_sks' => 'required|integer',
            'ruang' => 'required|max:50'
        ]);

        $mataKuliah = MataKuliah::findOrFail($kode_mk);
        $mataKuliah->update($request->all());
        return redirect()->route('mata_kuliah.index')->with('success', 'Mata kuliah berhasil diperbarui.');
    }

    public function destroyMataKuliah($kode_mk)
    {
        $mataKuliah = MataKuliah::findOrFail($kode_mk);
        $mataKuliah->delete();
        return redirect()->route('mata_kuliah.index')->with('success', 'Mata kuliah berhasil dihapus.');
    }

    // Method untuk membaca data perkuliahan
    public function indexPerkuliahan()
    {
        $perkuliahan = Perkuliahan::all();
        $mata_kuliah = MataKuliah::all();
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::all();

        return view('data.perkuliahan', compact('perkuliahan', 'mata_kuliah', 'dosen', 'mahasiswa'));
    }

}
