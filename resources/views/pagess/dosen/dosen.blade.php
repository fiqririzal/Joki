@extends('layouts.dashboard')
@section('content')
    Ini Halaman Dosen
@endsection
@section('title')
    Ini Halaman Dosen
@endsection
@section('content2')
<a href="{{url('dosen/input')}}"type="submit" class="btn btn-primary">Tambah Data</a>

<div class="card">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Gambar</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($dosen as $key => $item)
      <tr>
        <td>{{$key + 1}}</td>
        <td>{{$item->name}}</td>
        <td><img src="{{ asset('images/dosen/' . $item->image) }} "width="50px">
        </td>
        <td>{{$item->jabatan}}</td>
        <td>
        <a href="/dosen/{{$item->id}}" class="btn btn-info btn-sm">Delete</a></td>

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
