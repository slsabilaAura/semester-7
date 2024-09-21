@extends('layouts.app')

@section('title', 'Edit Dosen')

@section('content')
    <h2>Edit Dosen</h2>
    <form action="{{ route('dosen.update', $dosen['nip']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nip">NIP:</label>
        <input type="text" name="nip" id="nip" value="{{ $dosen['nip'] }}" readonly>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="{{ $dosen['nama'] }}" required>

        <label for="no_wa">Nomor WA:</label>
        <input type="text" name="no_wa" id="no_wa" value="{{ $dosen['no_wa'] }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
