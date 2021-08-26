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
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data User</li>
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
                                <h5 class="card-title">Kelola Pengguna</h5>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="tableSantri" class="table table-bordered table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Role</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach ($user as $a)
                                                <tr>
                                                    <td>{{ $no }}</td>
                                                    <td>{{ $a->name }}</td>
                                                    @if ($a->is_admin == null)
                                                        <td>Belum dikonfirmasi</td>
                                                    @elseif($a->is_admin == 1)
                                                        <td>Administrator</td>
                                                    @elseif($a->is_admin == 2)
                                                        <td>Pendidik</td>
                                                    @elseif($a->is_admin == 3)
                                                        <td>Santri</td>
                                                    @elseif($a->is_admin == 4)
                                                        <td>Alumni</td>
                                                    @endif
                                                    <td>
                                                        <div class="btn-group btn-group-sm" role="group"
                                                            aria-label="Basic example">
                                                            <button type="button" id="editadmin"
                                                                class="btn btn-primary ModalAdmin"
                                                                data-id="{{ $a->id }}">
                                                                <i class="fas fa-user-edit"></i>
                                                            </button>
                                                            <button type="button" id="earase"
                                                                class="btn btn-danger DelAdmin"
                                                                data-id="{{ $a->id }}">
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

    {{-- Modal Edit --}}
    <div class="modal fade" id="adminmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Administrator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="DataAdmin" name="AdminForm" onsubmit="return admin_validasi()">
                        @csrf
                        <div class="form-group row">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select name="role" class="custom-select">
                                    <option value="0" selected>---Pilih Role---</option>
                                    <option value="1">Administrator</option>
                                    <option value="2">Pendidik</option>
                                    <option value="3">Santri</option>
                                    <option value="4">Alumni</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="user_id" name="user_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    {{-- <button type="button" class="btn btn-primary">Simpan</button> --}}
                    <input type="submit" value="Simpan" id="submit" class="btn btn-primary">
                </div>
                </form>

            </div>
        </div>
    </div>
    {{-- End Modal --}}

    {{-- Modal Delete --}}
    <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="DeleteAdmin">
                        @csrf
                        <h2>Yakin untuk menghapus data?</h2>
                        <input type="hidden" id="user_id" name="user_id" value="{{ $a->id }}">
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
            $('#tableSantri').DataTable();
        });

        $(document).ready(function() {
            $('.ModalAdmin').on('click', function() {
                let getId = $(this).data('id')
                // console.log(getId)
                let id = $('#user_id').val(getId)
                $('#adminmodal').modal('show');

            });
        });

        function admin_validasi() {
            if (document.forms["AdminForm"]["role"].selectedIndex < 1) {
                swal({
                    title: "Error!",
                    text: "Silahkan pilih role terlebih dahulu!",
                    icon: "error",
                    button: false,
                });
                document.forms["AdminForm"]["role"].focus();
                return false;
            } else {

                $('body').on('submit', '#DataAdmin', function(e) {

                    e.preventDefault()

                    let data = new FormData(this);
                    let id = $('#editadmin').data('id');
                    console.log(id)

                    $.ajax({
                        contentType: false,
                        processData: false,
                        url: "{{ URL('user') }}/" + id,
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
                                // window.location.reload(true);
                            }, 1000);
                        }

                    });

                });
            }
        }



        // Delete Admin
        $(document).ready(function() {
            $('.DelAdmin').on('click', function() {
                $('#deletemodal').modal('show');
            });
        });

        $('body').on('submit', '#DeleteAdmin', function(e) {

            e.preventDefault()

            let data = new FormData(this);
            let id = $('#earase').data('id');

            $.ajax({
                contentType: false,
                processData: false,
                url: "{{ URL('delete') }}/" + id,
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
