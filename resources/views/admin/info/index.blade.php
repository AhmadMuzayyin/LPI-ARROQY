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
                            <li class="breadcrumb-item active">Pengumuman</li>
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" card-title">{{ $title }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/info') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Judul Pengumuman</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" placeholder="judul pengumuman"
                                            value="{{ old('title') }}" required autofocus>
                                        @error('title')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Isi Pengumuman</label>
                                        <input type="text" class="form-control @error('body') is-invalid @enderror"
                                            id="body" name="body" placeholder="isi pengumuman" value="{{ old('body') }}"
                                            required>
                                        @error('body')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <small class="form-text text-muted mt-1" style="font-style: italic">*Nama akan
                                            tampil
                                            berdasarkan nama panjang
                                            anda!</small>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class=" card-title">{{ $title }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    @foreach ($data as $info)
                                        <div class="form-group">
                                            <label for="NamaLengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="NamaLengkap"
                                                value="{{ $info->user->fullname }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Judul Pengumuman</label>
                                            <input type="text" class="form-control" id="title"
                                                value="{{ $info->title }}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="body">Isi Pengumuman</label>
                                            <textarea class="form-control" id="body" rows="3"
                                                readonly>{{ $info->body }}</textarea>
                                        </div>
                                        <small class="form-text text-danger"
                                            style="font-style: italic">{{ $info->created_at->diffForHumans() }}</small>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>
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
