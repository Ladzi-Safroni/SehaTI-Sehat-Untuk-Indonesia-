@extends('master/master')
@include('master/common/aside')

@section('pengumuman')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{ $message }}</strong>
              </div>
             @endif
              <h1>Hii User, {{  Auth::user()->name  }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/user') }}">Pengajuan</a></li>
              <li class="breadcrumb-item active">Form Pengajuan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Pengajuan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group row">

                    <div class="col-md-6 left">
                      <label for="" class="mt-2">NIK</label>
                      <input type="text" class="form-control" name="nik" placeholder="Input NIK">

                      <label for="" class="mt-2">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" placeholder="Input Nama">

                      <label for="" class="mt-2">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Input Tempat Lahir">

                      <label for="" class="mt-2">Tanggal Lahir</label>
                      <input type="date" class="form-control" name="tgl_lahir">

                      <label for="" class="mt-2">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jk" placeholder="Input L/P">
                    </div>

                    <div class="col-md-6 right">
                      <label for="" class="mt-2">No. Telepon</label>
                      <input type="text" class="form-control" name="telepon" placeholder="Input No. Telepon">

                      <label for="" class="mt-2">Alamat Tinggal</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Input Alamat Tinggal">

                      <label for="exampleInputFile" class="mt-2">Scan KTP</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>

                      <label for="exampleInputFile" class="mt-2">Scan KK</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                      <br>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                      </div>
                       <!-- /.card-body -->
                      <div class="footer d-flex justify-content-end">
                      <a href="{{ url('user') }}" type="button" class="btn btn-secondary mr-2">kembali</a>
                      <a type="submit" class="btn btn-primary mr-2">Kirim</a>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
            <!-- /.card -->

@endsection