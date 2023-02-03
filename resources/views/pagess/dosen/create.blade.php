@extends('layouts.dashboard')
@section('content')
    Ini Halaman Dosen
@endsection
@section('title')
    Ini Halaman Dosen
@endsection
@section('content2')

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Dosen</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('/dosen/simpan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Dosen">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Jabatan</label>
                    <select name="jabatan" id="plan" class="custom-select">
                        <option value="Dosen Tetap">Dosen Tetap</option>
                        <option value="Dosen Luar Biasa" selected>Dosen Luar Biasa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

        <!-- /.card -->

      </div>

@endsection
@section('footer')
    Ini halaman Dashboard
@endsection
