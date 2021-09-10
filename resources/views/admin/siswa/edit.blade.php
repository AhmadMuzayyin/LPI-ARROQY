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
                                <form action="{{ url('/siswa/edit') . '/' . $siswa->nickname }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nis">NIS</label>
                                        <input type="number"
                                            class="form-control @error('nisn')
                                              is-invalid
                                            @enderror"
                                            id="nis" name="nisn" placeholder="NISN" required
                                            value="{{ $siswa->user_detail->nisn }}" readonly>
                                        @error('nisn')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text"
                                                class="form-control @error('fullname')
                                              is-invalid
                                            @enderror"
                                                id="fullname" name="fullname" placeholder="Nama Lengkap" required
                                                value="{{ $siswa->fullname }}" autofocus>
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
                                                value="{{ $siswa->nickname }}">
                                            @error('nickname')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat Lengkap</label>
                                        <input type="text"
                                            class="form-control @error('alamat')
                                              is-invalid
                                            @enderror"
                                            id="alamat" name="alamat" placeholder="Alamat Lengkap" required
                                            value="{{ $siswa->user_detail->alamat }}">
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tempat">Tempat</label>
                                            <input type="text"
                                                class="form-control @error('tempat_lahir')
                                              is-invalid
                                            @enderror"
                                                id="tempat" name="tempat_lahir" placeholder="Tempat Lahir"
                                                value="{{ $siswa->user_detail->tempat_lahir }}">
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
                                                value="{{ $siswa->user_detail->tanggal_lahir }}">
                                            @error('tanggal_lahir')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="NamaAyah">Nama Ayah</label>
                                            <input type="text"
                                                class="form-control @error('nama_ayah')
                                              is-invalid
                                            @enderror"
                                                id="NamaAyah" name="nama_ayah" placeholder="Nama Ayah" required
                                                value="{{ $siswa->user_detail->nama_ayah }}">
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
                                                required value="{{ $siswa->user_detail->pekerjaan_ayah }}">
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
                                                value="{{ $siswa->user_detail->nama_ibu }}">
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
                                                value="{{ $siswa->user_detail->pekerjaan_ibu }}">
                                            @error('pekerjaan_ibu')
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
                                                value="{{ $siswa->user_detail->tahun_masuk }}">
                                            @error('tahun_masuk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="kelas">Kelas</label>
                                            <select
                                                class="custom-select @error('kelas_id')
                                              is-invalid
                                            @enderror"
                                                id="kelas" name="kelas_id">
                                                <option selected>kelas Anda {{ $siswa->user_detail->kelas->name }}
                                                </option>
                                                @foreach ($kelas as $k)
                                                    <option value="{{ $k->id }}">{{ $k->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('kelas_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <a href="{{ url('/siswa') }}" class="btn btn-secondary">Batal</a>
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
