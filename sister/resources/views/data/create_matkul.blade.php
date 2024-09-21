@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
    <h2>Tambah Mata Kuliah</h2>
    <form action="{{ route('mata_kuliah.store') }}" method="POST">
        @csrf
        <label for="kode_matkul">Kode MK:</label>
        <input type="text" name="kode_matkul" id="kode_matkul" required>

        <label for="nama_matkul">Nama MK:</label>
        <input type="text" name="nama_matkul" id="nama_matkul" required>

        <label for="sks">SKS:</label>
        <input type="number" name="sks" id="sks" required>

        <label for="ruang">Ruang:</label>
        <input type="text" name="ruang" id="ruang" required>


        <button type="submit">Simpan</button>
    </form>
@endsection
