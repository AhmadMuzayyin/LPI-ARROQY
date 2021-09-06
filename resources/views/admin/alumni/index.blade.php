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
                                <h5 class="card-title">Data Alumni</h5>
                                {{-- <div class="card-tools float-sm-right"></div> --}}

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2" style="margin-bottom: 2%">
                                        <a href="{{ url('/alumni/add') }}" type="button"
                                            class="btn btn-block bg-gradient-info btn-sm m-0"><i
                                                class="nav-icon fas fa-user-plus"></i>Tambah
                                            Santri</a>
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
                                            @foreach ($alumni as $data)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama_panjang }}</td>
                                                    <td>{{ $data->tempat_lahir . ', ' . $data->tanggal_lahir }}</td>
                                                    <td>{{ $data->alamat }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" id="DetailAlumni"
                                                                class="btn btn-success DetailAlumni"
                                                                data-id="{{ $data->id }}">
                                                                <i class="fas fa-eye"></i>
                                                            </button>
                                                            <a href="{{ url('/alumni/edit') . '/' . $data->nama_panggilan }}"
                                                                class="btn btn-primary">
                                                                <i class="fas fa-user-edit"></i>
                                                            </a>
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
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

    {{-- Modal Edit --}}
    <div class="modal fade" id="alumnimodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Administrator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                    <h5>{{ $data->nama_panjang }}</h5>
                    <input type="text" value="{{ $data->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- End Modal --}}
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('#tableSantri').DataTable();
        });

        $(document).ready(function() {
            $('.DetailAlumni').on('click', function() {
                let getId = $(this).data('id')
                // console.log(getId)
                let id = $('#user_id').val(getId)
                $('#alumnimodal').modal('show');

            });
        });
    </script>
@endpush
