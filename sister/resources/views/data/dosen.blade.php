@extends('layouts.app')

@section('title', 'Data Dosen')

@section('content')
    <h2>Data Dosen</h2>
    <a href="{{ route('dosen.create') }}">Tambah Dosen</a>
    <table>
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dosen)
                <tr>
                    <td>{{ $dosen['nip'] }}</td>
                    <td>{{ $dosen['nama'] }}</td>
                    <td>{{ $dosen['no_wa'] }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $dosen['nip']) }}">Edit</a>
                        <form action="{{ route('dosen.delete', $dosen['nip']) }}" method="POST" style="display: inline;">
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
