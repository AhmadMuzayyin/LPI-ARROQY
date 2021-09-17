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
                                <form action="{{ url('kelas') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <label for="name">Nama Kelas</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" placeholder="Nama Kelas" required
                                            value="{{ old('name') }}" autofocus>
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Tingkat</label>
                                        <select class="custom-select @error('tingkat') is-invalid @enderror" id="tingkat"
                                            name="tingkat">
                                            <option selected value="">Pilih tingkatan kelas</option>
                                            <option value="PAUD">Pendidikan Anak Usia Dini</option>
                                            <option value="MADIN">Madrasah Diniyah</option>
                                        </select>
                                        @error('tingkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <a href="{{ url('/kelas') }}" class="btn btn-secondary">Batal</a>
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
