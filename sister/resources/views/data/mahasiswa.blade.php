@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h2>Data Mahasiswa</h2>
    <a href="{{ route('mahasiswa.create') }}">Tambah Mahasiswa</a>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa['nim'] }}</td>
                    <td>{{ $mahasiswa['nama'] }}</td>
                    <td>{{ $mahasiswa['alamat'] }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa['nim']) }}">Edit</a>
                        <form action="{{ route('mahasiswa.delete', $mahasiswa['nim']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
