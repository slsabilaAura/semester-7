@extends('layouts.app')

@section('title', 'Data Perkuliahan')

@section('header', 'Data Perkuliahan')

@section('content')
<h2>Data Perkuliahan</h2>
<table>
    <thead>
        <tr>
            <th>NIM Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>NIP Dosen</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Nilai</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($perkuliahan as $kuliah)
            <tr>
                <td>{{ $kuliah->mahasiswa->nim ?? 'Unknown' }}</td>
                <td>{{ $kuliah->mahasiswa->nama ?? 'Unknown' }}</td>
                <td>{{ $kuliah->dosen->nama ?? 'Unknown' }}</td>
                <td>{{ $kuliah->dosen->nip ?? 'Unknown' }}</td>
                <td>{{ $kuliah->mataKuliah->kode_mk ?? 'Unknown' }}</td>
                <td>{{ $kuliah->mataKuliah->nama_mk ?? 'Unknown' }}</td>
                <td>{{ $kuliah->nilai }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection