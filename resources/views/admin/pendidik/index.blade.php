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
                            <li class="breadcrumb-item active">Data Alumni</li>
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
                                <h5 class="card-title">Data Siswa</h5>
                                {{-- <div class="card-tools float-sm-right"></div> --}}

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2" style="margin-bottom: 2%">
                                        <a href="{{ url('/pendidik/add') }}" type="button"
                                            class="btn btn-block bg-gradient-info btn-sm m-0"><i
                                                class="nav-icon fas fa-user-plus"></i>Tambah
                                            Pendidik</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tableSantri" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tempat/Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pendidik as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->fullname }}</td>
                                                    <td>{{ $data->user_detail->tempat_lahir . ', ' . $data->user_detail->tanggal_lahir }}
                                                    </td>
                                                    <td>{{ $data->user_detail->alamat }}</td>
                                                    <td>
                                                        <form action="{{ url('/pendidik') . '/' . $data->nickname }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="btn-group btn-group-sm" role="group"
                                                                aria-label="Basic example">
                                                                <a href="{{ url('/pendidik') . '/' . $data->nickname }}"
                                                                    class="btn btn-success">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <a href="{{ url('/pendidik/edit') . '/' . $data->nickname }}"
                                                                    class="btn btn-primary">
                                                                    <i class="fas fa-user-edit"></i>
                                                                </a>
                                                                <button class="btn btn-danger"
                                                                    onclick="return confirm('Yakin ingin menghapus data?')">
                                                                    <i class="fas fa-trash"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.row -->
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('#tableSantri').DataTable();
        });
    </script>
@endpush
