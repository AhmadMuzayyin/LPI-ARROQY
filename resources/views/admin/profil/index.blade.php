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
                            <li class="breadcrumb-item active">Data Profil</li>
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
                                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Profils
                                    </button>
                                    @foreach ($profils as $p)
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ url('/profil/profil-lembaga') }}">Profil
                                                Yayasan</a>
                                            <a class="dropdown-item" href="{{ url('/profil/profil-madin') }}">Profil
                                                MADIN</a>
                                            <a class="dropdown-item" href="{{ url('/profil/profil-paud') }}">Profil
                                                Paud</a>
                                            <a class="dropdown-item" href="{{ url('/profil/profil-alumni') }}">Profil
                                                Alumni</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        {{-- @dd($profils->name) --}}
                                        <h1>{{ $profils->name }}</h1>
                                        <textarea class="form-control" id="profil" rows="10" name="profil"
                                            {{ Request::is('edit') ? '' : 'disabled' }}>{{ $profils->profil }}</textarea>
                                    </div>
                                </form>
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
