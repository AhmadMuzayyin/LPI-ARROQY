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
                          <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-success"><i class="fas fa-eye"></i></button>
                            <button type="button" class="btn btn-primary"><i class="fas fa-user-edit"></i></button>
                            <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

  </div>
@endsection