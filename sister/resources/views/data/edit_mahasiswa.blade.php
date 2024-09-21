@extends('layouts.app')

@section('title', 'Edit Mahasiswa')

@section('content')
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa['nim']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nim">NIM:</label>
        <input type="text" name="nim" id="nim" value="{{ $mahasiswa['nim'] }}" readonly>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $mahasiswa['nama'] }}" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" id="alamat" value="{{ $mahasiswa['alamat'] }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
