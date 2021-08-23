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
                            <li class="breadcrumb-item active">Tahun Akademik</li>
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
                                <h5 class="card-title">Pekerjaan</h5>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-2" style="margin-bottom: 2%">
                                        <a href="#" type="button" class="btn btn-block bg-gradient-info btn-sm m-0"
                                            data-toggle="modal" data-target="#exampleModal"><i
                                                class="nav-icon fas fa-user-plus"></i>Tambah</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tablepekerjaan" class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Pekerjaan</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($pekerjaan as $a)
                                                <tr>
                                                    <td>{{ $no }}
                                                    </td>
                                                    <td>{{ $a->profession }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" class="btn btn-danger">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php $no++; ?>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                    </div>
                    <!--/. container-fluid -->
        </section>
        <!-- /.content -->

    </div>
    {{-- Modal Add Pekerjaan --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tahun Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('addwork') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('#tablepekerjaan').DataTable();
        });
    </script>
@endpush
