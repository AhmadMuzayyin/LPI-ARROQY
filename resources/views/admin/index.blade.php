@extends('admin.template.main')
@section('content')

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
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Santri</span>
                                <span class="info-box-number">{{ $user->where('role', 3)->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-danger elevation-1"><i
                                    class="fas fa-chalkboard-teacher"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Guru</span>
                                <span class="info-box-number">{{ $user->where('role', 2)->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->


                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Alumni</span>
                                <span class="info-box-number">{{ $user->where('role', 4)->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <!-- fix for small devices only -->
                    <div class="clearfix hidden-md-up"></div>

                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-user"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Pengguna</span>
                                <span class="info-box-number">{{ $user->count() }}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                </div>
                <!-- /.col -->


            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        {{-- <div class="card-header">

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </button>
                            </div>

                        </div> --}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <h1>

                                    @if (Auth()->user()->role == 1)
                                        Selamat Datang {{ Auth::user()->name }}
                                    @elseif (Auth()->user()->role == 2)
                                        Selamat Datang {{ Auth::user()->name }}
                                    @elseif (Auth()->user()->role == NULL)
                                        Silahkan Hubungi Administrator!
                                    @endif

                                </h1>
                                <p>Selamat datang diaplikasi sistem basis data <b>LPI-ARROQY</b>, aplikasi ini terbentuk
                                    karena adanya tujuan untuk mengkomputerisasi data-data di <b>Lembaga Pendidikan Islam
                                        Arroqy</b> untuk mempermudah pengolahan data.</p>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h6>Role info!</h6>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>1. Administrator (Admin Utama)</li>
                                <li>2. Admin E - Learning</li>
                                <li>3. Admin Perpustakaan</li>
                                <li>4. Pendidik</li>
                                <li>5. Santri</li>
                                <li>6. Alumni</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
