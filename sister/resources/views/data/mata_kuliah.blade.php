@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
    <h2>Data Mata Kuliah</h2>
    <a href="{{ route('mata_kuliah.create') }}">Tambah Mata Kuliah</a>
    <table>
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>Jumlah SKS</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $mataKuliah)
                <tr>
                    <td>{{ $mataKuliah['kode_mk'] }}</td>
                    <td>{{ $mataKuliah['nama_mk'] }}</td>
                    <td>{{ $mataKuliah['jml_sks'] }}</td>
                    <td>{{ $mataKuliah['semester'] }}</td>
                    <td>
                        <a href="{{ route('mata_kuliah.edit', $mataKuliah['kode_mk']) }}">Edit</a>
                        <form action="{{ route('mata_kuliah.delete', $mataKuliah['kode_mk']) }}" method="POST" style="display: inline;">
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
