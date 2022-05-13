@extends('admin.template.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        @foreach ($data as $alumni)
                            <div class="card">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ url('/uploads') . '/' . $alumni->profil_photo }}"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ $alumni->fullname }}</h3>
                                    <p class="text-muted text-center">{{ $alumni->nickname }}</p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Alamat</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $alumni->user_detail->alamat }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Lokasi Alumni</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $alumni->user_detail->bagian }}</a>
                                        </li>
                                    </ul>

                                    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                                </div>
                                <!-- /.card-body -->
                            </div>
                        @endforeach
                        <!-- /.row -->
                    </div>
                    <!--/. container-fluid -->
        </section>
        <!-- /.content -->

    </div>
@endsection
