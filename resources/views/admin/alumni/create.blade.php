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

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $title }}</h5>
                                {{-- <div class="card-tools float-sm-right"></div> --}}

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('alumni') }}" method="post">
                                    @csrf

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                                                id="fullname" name="fullname" placeholder="Nama Lengkap" required
                                                value="{{ old('fullname') }}" autofocus>
                                            @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="nickname">Nama Panggilan</label>
                                            <input type="text" class="form-control @error('nickname') is-invalid @enderror"
                                                id="nickname" name="nickname" placeholder="Nama Panggilan" required
                                                value="{{ old('nickname') }}">
                                            @error('nickname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat Lengkap</label>
                                            <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                                id="alamat" name="alamat" placeholder="Alamat Lengkap" required
                                                value="{{ old('alamat') }}" autofocus>
                                            @error('alamat')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="bagian">Lokasi Alumni</label>
                                            <select class="custom-select" id="bagian" name="bagian">
                                                <option value="">Pilih Bagian</option>
                                                <option value="Barat">Barat</option>
                                                <option value="Tengah">Tengah</option>
                                                <option value="Timur">Timur</option>
                                                <option value="Luar">Luar</option>
                                            </select>
                                        </div>
                                    </div>

                                    <a href="{{ url('/alumni') }}" class="btn btn-secondary">Batal</a>
                                    {{-- <button type="button"  data-dismiss="modal">Batal</button> --}}
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
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
@endsection
