@extends('layouts.app')

@section('title', 'Tambah Dosen')

@section('content')
    <h2>Tambah Dosen</h2>
    <form action="{{ route('dosen.store') }}" method="POST">
        @csrf
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="no_wa">Nomor WA:</label>
        <input type="text" name="no_wa" id="no_wa" required>

        <button type="submit">Simpan</button>
    </form>
@endsection
