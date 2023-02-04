@extends('layouts.dashboard')
@section('content')
    Ini Halaman Mahasiswa
@endsection
@section('title')
    Ini Halaman Mahasiswa
@endsection
@section('content2')

<a href="{{url('mahasiswa/input')}}"type="submit" class="btn btn-primary">Tambah Data</a>

<div class="card">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">NIM</th>
        <th scope="col">TGL Lahir</th>
        <th scope="col">Asal Daerah</th>
        <th scope="col">Motto</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($mahasiswa as $key => $item)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->nim}}</td>
        <td>{{$item->tgl_lahir}}</td>
        <td>{{$item->daerah}}</td>
        <td>{{$item->moto}}</td>
        <td>
        <a href="/mahasiswa/{{$item->id}}" class="btn btn-info btn-sm">Delete</a></td>
        @empty

        @endforelse
      </tr>

    </tbody>
  </table>
</div>
@endsection
@section('footer')
    Ini halaman Dashboard
@endsection
