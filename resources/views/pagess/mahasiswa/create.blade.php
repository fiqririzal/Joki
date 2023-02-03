@extends('layouts.dashboard')
@section('content')
    Ini Halaman Mahasiswa
@endsection
@section('title')
    Ini Halaman Mahasiswa
@endsection
@section('content2')

    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambah Mahasiswa</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('/mahasiswa/simpan')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa">
              </div>
              <div class="form-group">
                <label for="nim">Nim</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Nim Mahasiswa">
              </div>
              <div class="form-group" id='CalendarDateTime'>
                <label for="exampleInputEmail1">Tgl Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tgl Lahir">
              </div>
              <div class="form-group">
                <label for="daerah">Asal Daerah</label>
                <input type="text" class="form-control" id="daerah" name="daerah" placeholder="Asal Daerah Mahasiswa">
              </div>
              <div class="form-group">
                <label for="motto">Motto</label>
                <input type="text" class="form-control" id="motto" name="motto" placeholder="motto Mahasiswa">
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> --}}

        <script type="text/javascript">
            $(function() {
               $('#CalendarDateTime').datetimepicker();
            });
        </script>
        <!-- /.card -->

      </div>

@endsection
@section('footer')
    Ini halaman Dashboard
@endsection
