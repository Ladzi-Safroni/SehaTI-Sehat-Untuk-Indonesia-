@extends('master/master')

@section('dashboard')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $admins}}</h3>

                <p>ADMIN</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-cog"></i>
              </div>
              @if (Auth::user()->role == 1)
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$users}}</h3>

                <p>USER</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              @if (Auth::user()->role == 1)
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>     
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{count($pengajuans)}}</h3>

                <p>USER SUBMIT</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              @if (Auth::user()->role == 1)
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> 
              @endif
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{count($approves)}}</h3>

                <p>USER ACCEPTED</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-check"></i>
              </div>
              @if (Auth::user()->role == 1)
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              @endif
            </div>
          </div>
          <!-- ./col -->
        </div>

        </section>
          <!-- right col -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
