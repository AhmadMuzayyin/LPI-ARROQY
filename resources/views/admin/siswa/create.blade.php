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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">{{ $title }}</h5>
                                {{-- <div class="card-tools float-sm-right"></div> --}}

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ url('siswa') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nis">NIS</label>
                                        <input type="number"
                                            class="form-control @error('nis')
                                              is-invalid
                                            @enderror"
                                            id="nis" name="nisn" placeholder="NISN" required autofocus
                                            value="{{ old('nisn') }}">
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('fullname')
                                              is-invalid
                                            @enderror"
                                                id="fullname" name="fullname" placeholder="Nama Lengkap" required
                                                value="{{ old('fullname') }}">
                                            @error('fullname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nickname">Nama Panggilan</label>
                                            <input type="text"
                                                class="form-control @error('nickname')
                                              is-invalid
                                            @enderror"
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
                                            <label for="tahun_masuk">Tahun Masuk</label>
                                            <input type="date"
                                                class="form-control @error('tahun_masuk')
                                              is-invalid
                                            @enderror"
                                                id="tahun_masuk" name="tahun_masuk" placeholder="Tahun Masuk" required
                                                value="{{ old('tahun_masuk') }}">
                                            @error('tahun_masuk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tahun_keluar">Tahun Keluar</label>
                                            <input type="date"
                                                class="form-control @error('tahun_keluar')
                                              is-invalid
                                            @enderror"
                                                id="tahun_keluar" name="tahun_keluar" required
                                                value="{{ old('tahun_keluar') }}">
                                            @error('tahun_keluar')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tempat">Tempat</label>
                                            <input type="text"
                                                class="form-control @error('tempat_lahir')
                                              is-invalid
                                            @enderror"
                                                id="tempat" name="tempat_lahir" placeholder="Tempat Lahir"
                                                value="{{ old('tempat_lahir') }}">
                                            @error('tempat_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="tgl">Tanggal Lahir</label>
                                            <input type="date"
                                                class="form-control @error('tanggal_lahir')
                                              is-invalid
                                            @enderror"
                                                id="tgl" name="tanggal_lahir" required
                                                value="{{ old('tanggal_lahir') }}">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <input type="text"
                                            class="form-control @error('alamat')
                                              is-invalid
                                            @enderror"
                                            id="alamat" name="alamat" placeholder="Alamat Lengkap" required
                                            value="{{ old('alamat') }}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="NamaAyah">Nama Ayah</label>
                                            <input type="text"
                                                class="form-control @error('nama_ayah')
                                              is-invalid
                                            @enderror"
                                                id="NamaAyah" name="nama_ayah" placeholder="Nama Ayah" required
                                                value="{{ old('ayah') }}">
                                            @error('nama_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="PekerjaanAyah">Pekerjaan Ayah</label>
                                            <input type="text"
                                                class="form-control @error('pekerjaan_ayah')
                                              is-invalid
                                            @enderror"
                                                id="PekerjaanAyah" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah"
                                                required value="{{ old('pekerjaan_ayah') }}">
                                            @error('pekerjaan_ayah')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="NamaIbu">Nama Ibu</label>
                                            <input type="text"
                                                class="form-control @error('nama_ibu')
                                              is-invalid
                                            @enderror"
                                                id="NamaIbu" name="nama_ibu" placeholder="Nama Ibu" required
                                                value="{{ old('ibu') }}">
                                            @error('nama_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="PekerjaanIbu">Pekerjaan Ibu</label>
                                            <input type="text"
                                                class="form-control @error('pekerjaan_ibu')
                                              is-invalid
                                            @enderror"
                                                id="PekerjaanIbu" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required
                                                value="{{ old('pekerjaan_ibu') }}">
                                            @error('pekerjaan_ibu')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <input type="hidden" class="form-control" name="role" value="5"> --}}
                                    <a href="{{ url('/santri') }}" class="btn btn-secondary">Batal</a>
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
