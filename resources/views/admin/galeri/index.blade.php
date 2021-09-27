@extends('admin.template.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">LPI - ARROQY</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Galeri</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" card-title">Kelola Profil</h5>
                                <div class="float-lg-right float-md-right float-sm-right">
                                    <a href="{{ url('/galeri/add') }}" class="btn btn-info btn-sm"><i
                                            class="nav-icon fas fa-user-plus"></i>
                                        Tambah Galeri
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="btn-group w-100 mb-2">
                                        <a class="btn btn-info active" href="{{ url('/galeri') }}" data-filter="all"> All
                                            Galeri </a>
                                        <a class="btn btn-info" href="{{ url('/galeri/madin') }}" data-filter="1">
                                            Galeri MADIN
                                        </a>
                                        <a class="btn btn-info" href="{{ url('/galeri/paud') }}" data-filter="2"> Galeri
                                            PAUD
                                        </a>
                                        <a class="btn btn-info" href="{{ url('/galeri/alumni') }}" data-filter="3">
                                            Galeri Alumni
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($galeri as $g)
                                        <div class="col-md-3 mb-3 mt-2">
                                            <div class="card">
                                                <img src="{{ url('/uploads') . '/' . $g->image }}" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $g->title }}</h5>
                                                    <p class="card-text">{{ $g->excerp }}</p>
                                                    <a href="#" class="card-link">Edit</a>
                                                    <a href="#" class="card-link">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div>
    <!--/. container-fluid -->
    </section>
    <!-- /.content -->

    </div>
@endsection
