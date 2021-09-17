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
                            <li class="breadcrumb-item active">Data Kelas</li>
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
                                        <a href="{{ url('/kelas/add') }}" type="button"
                                            class="btn btn-block bg-gradient-info btn-sm m-0"><i
                                                class="nav-icon fas fa-user-plus"></i>Tambah
                                            Kelas</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tableSantri" class="table table-bordered table-hover  text-center">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tingkatan</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kelas as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->tingkat }}</td>
                                                    <td>
                                                        <form action="{{ url('/kelas') . '/' . $data->id }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="btn-group btn-group-sm" role="group"
                                                                aria-label="Basic example">
                                                                <a href="{{ url('/kelas/edit') . '/' . $data->id }}"
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
