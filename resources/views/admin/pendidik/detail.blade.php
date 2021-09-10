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
                        @foreach ($data as $pendidik)
                            <div class="card">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="{{ url('/uploads') . '/' . $pendidik->profil_photo }}"
                                            alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ $pendidik->fullname }}</h3>

                                    <p class="text-muted text-center">{{ $pendidik->user_detail->nip }}</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Alamat</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->alamat }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Tempat Tanggal Lahir</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->tempat_lahir . ', ' . $pendidik->user_detail->tanggal_lahir }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Nama Ayah</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->nama_ayah }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Pekerjaan Ayah</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->pekerjaan_ayah }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Nama Ibu</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->nama_ibu }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Pekerjaan Ibu</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->pekerjaan_ibu }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Jabatan</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->jabatan }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Tahun Masuk</b> <a
                                                class="float-right text-decoration-none text-dark">{{ $pendidik->user_detail->tahun_masuk }}</a>
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
