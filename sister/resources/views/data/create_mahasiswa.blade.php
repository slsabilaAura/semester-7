@extends('layouts.app')

@section('title', 'Tambah Mahasiswa')

@section('content')
    <h2>Tambah Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
