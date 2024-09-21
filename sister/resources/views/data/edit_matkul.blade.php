@extends('layouts.app')

@section('title', 'Edit Mata Kuliah')

@section('content')
    <h2>Edit Mata Kuliah</h2>
    <form action="{{ route('mata_kuliah.update', $mataKuliah['kode_matkul']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="kode_matkul">Kode MK:</label>
        <input type="text" name="kode_matkul" id="kode_matkul" value="{{ $mataKuliah['kode_matkul'] }}" readonly>

        <label for="nama_matkul">Nama MK:</label>
        <input type="text" name="nama_matkul" id="nama_matkul" value="{{ $mataKuliah['nama_matkul'] }}" required>

        <label for="sks">SKS:</label>
        <input type="number" name="sks" id="sks" value="{{ $mataKuliah['sks'] }}" required>

        <label for="ruang">Ruang:</label>
        <input type="text" name="ruang" id="ruang" value="{{ $mataKuliah['ruang'] }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
