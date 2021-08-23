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
                            <li class="breadcrumb-item active">Data Santri</li>
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
                                <h5 class="card-title">Monthly Recap Report</h5>
                                <div class="card-tools float-sm-right">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-2" style="margin-bottom: 2%">
                                        <a href="#" type="button" class="btn btn-block bg-gradient-info btn-sm m-0"
                                            data-toggle="modal" data-target="#exampleModal"><i
                                                class="nav-icon fas fa-user-plus"></i>Tambah Santri</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table id="tableSantri" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nis</th>
                                                <th>Nama</th>
                                                <th>Tempat/Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th><i class="fas fa-cog"></i></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>121212</td>
                                                <td>Ahmad Muzayyin</td>
                                                <td>Sumenep, 15-05-1999</td>
                                                <td>Gadu Barat Ganding Sumenep</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm" role="group"
                                                        aria-label="Basic example">
                                                        <button type="button" class="btn btn-success"><i
                                                                class="fas fa-eye"></i></button>
                                                        <button type="button" class="btn btn-primary"><i
                                                                class="fas fa-user-edit"></i></button>
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="fas fa-trash"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
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
    {{-- Modal Add Sanatri --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Santri</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NIS">NIS</label>
                                <input type="number" class="form-control" id="NIS" placeholder="NIS">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="NAMA">Nama</label>
                                <input type="text" class="form-control" id="NAMA" placeholder="Nama">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tempat">Tempat</label>
                                <input type="text" class="form-control" id="tempat" placeholder="Tempat Lahir">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tgl">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tgl">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Alamat Lengkap">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tahun Akademik</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NamaAyah">Nama Ayah</label>
                                <input type="text" class="form-control" id="NamaAyah" placeholder="Nama Ayah">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="PekerjaanAyah">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="PekerjaanAyah" placeholder="Pekerjaan Ayah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="NamaIbu">Nama Ibu</label>
                                <input type="number" class="form-control" id="NamaIbu" placeholder="Nama Ibu">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="PekerjaanIbu">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="PekerjaanIbu" placeholder="Pekerjaan Ibu">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
