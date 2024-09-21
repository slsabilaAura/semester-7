@extends('layouts.app')

@section('title', 'Data Perkuliahan')

@section('header', 'Data Perkuliahan')

@section('content')
    <h2>Data Perkuliahan</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
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
            @foreach ($perkuliahan as $perkuliahan)
                @php
                    // Find corresponding mata kuliah, dosen, and mahasiswa
                    $mataKuliah = collect($mata_kuliah)->firstWhere('kode_matkul', $perkuliahan['kode_matkul']);
                    $dosen = collect($dosen)->firstWhere('nip', $perkuliahan['nip']);
                    $mahasiswa = collect($mahasiswa)->firstWhere('nim', $perkuliahan['nim']);
                @endphp
                <tr>
                    <td>{{ $perkuliahan['id'] }}</td>
                    <td>{{ $mahasiswa['nim'] ?? 'Unknown' }}</td>
                    <td>{{ $mahasiswa['nama'] ?? 'Unknown' }}</td>
                    <td>{{ $dosen['nama'] ?? 'Unknown' }}</td>
                    <td>{{ $dosen['nip'] ?? 'Unknown' }}</td>
                    <td>{{ $mataKuliah['kode_matkul'] ?? 'Unknown' }}</td>
                    <td>{{ $mataKuliah['nama_matkul'] ?? 'Unknown' }}</td>
                    <td>{{ $perkuliahan['nilai'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
