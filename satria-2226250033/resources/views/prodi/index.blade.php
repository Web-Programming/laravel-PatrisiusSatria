@extends('layout.master')
@section('title','Halaman Prodi')
@section('content')
<h2>Program Studi</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>NPM</th><th>Nama Mahasiswa</th><th>Nama Prodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allmahasiswaprodi as $item)
            <tr>
                <td>{{$item->npm}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->nama_prodi}}</td>


            </tr>
        </tbody>
         @endforeach

    </table>
@endsection
