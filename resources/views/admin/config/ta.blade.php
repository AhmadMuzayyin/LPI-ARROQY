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
                                <h5 class="card-title">Tahun Akademik</h5>
                                {{-- <div class="card-tools float-sm-right">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </button>
                                </div> --}}

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
                                    <table id="tableta" class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Tahun Akademik</th>
                                                <th>Status</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($ta as $a)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $a->tahun_akademik }}</td>
                                                    <td>{{ $a->status }}</td>
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" id="editta"
                                                                class="btn btn-success ModalAkademik"
                                                                data-id="{{ $a->academics_id }}">
                                                                <i class="fas fa-check"></i>
                                                            </button>
                                                            <button type="button" id="DelTA" class="btn btn-danger DeleteTA"
                                                                data-id="{{ $a->academics_id }}">
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
    {{-- Modal Add Tahun Akademik --}}
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
                    <form action="{{ route('tatambah') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <input type="number" class="form-control" id="ta" name="ta" placeholder="Tahun Akademik">
                            <input type="hidden" class="form-control" id="status" name="status" value="Tidak Aktif">
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

    {{-- Modal Edit Tahun Akadmik --}}
    <div class="modal fade" id="akademikmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tahun Akademik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="DataAkademik">
                        @csrf
                        <h2>Aktifkan Tahun Akdemik ini?</h2>
                        <input type="hidden" id="status" name="status" value="Aktif">
                        <input type="hidden" id="ta_id" name="ta_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                    {{-- <input type="submit" value="Simpan" id="submit" class="btn btn-primary"> --}}
                </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Modal Delete --}}
    <div class="modal fade" id="AkademikDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="DeleteAkademik">
                        @csrf
                        <h2>Yakin untuk menghapus data?</h2>
                        <input type="hidden" id="ID_TA" name="ID_TA">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            {{-- <button type="button" class="btn btn-primary">Simpan</button> --}}
                            <input type="submit" value="Hapus" id="delete" class="btn btn-danger">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    {{-- End Modal --}}
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('#tableta').DataTable();
        });

        $(document).ready(function() {
            $('.ModalAkademik').on('click', function() {

                let getId = $(this).data('id')
                // console.log(getId)
                let id = $('#ta_id').val(getId)

                $('#akademikmodal').modal('show');

            });
        });

        $('body').on('submit', '#DataAkademik', function(e) {

            e.preventDefault()

            let data = new FormData(this);
            let id = $('#editta').data('id');
            // console.log(id);
            $.ajax({
                contentType: false,
                processData: false,
                url: "{{ URL('TA/edit') }}/" + id,
                type: 'POST',
                data: data,
                success: function(data) {
                // console.log(data)
                swal({
                    title: "Sukses!",
                    text: "Data berhasi diupdate!",
                    icon: "success",
                    button: false,
                    });
                    setTimeout(function() {
                        window.location.reload(true);
                    }, 1000);
                }
            });

            
        });

        // Delete Tahun Akademik
        $(document).ready(function() {
            $('.DeleteTA').on('click', function() {
                let getId = $(this).data('id')
                // // // console.log(getId)
                let id = $('#ID_TA').val(getId)
                $('#AkademikDelete').modal('show');

            });
        });

        $('body').on('submit', '#DeleteAkademik', function(e) {

            e.preventDefault()

            let data = new FormData(this);
            let id = $('#DelTA').data('id');
            // console.log(id)

            $.ajax({
                contentType: false,
                processData: false,
                url: "{{ URL('delete_TA') }}/" + id,
                type: 'post',
                data: data,
                success: function(data) {
                    swal({
                        title: "Sukses!",
                        text: "Data berhasi dihapus!",
                        icon: "success",
                        timer: 3000,
                        button: false,
                    });
                    setTimeout(function() {
                        window.location.reload(true);
                    }, 1000);
                }

            });

        });
    </script>
@endpush
