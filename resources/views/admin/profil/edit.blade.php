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
                            <li class="breadcrumb-item active">Data Profil</li>
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
                                <h5 class=" card-title">{{ $profil->name }}</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('/profil') . '/' . $profil->slug }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-2">
                                            <a href="{{ url('/profil') }}" class="text-decoration-none text-dark"><i
                                                    class="fas fa-edit"></i>
                                                Kembali
                                            </a>
                                            <a href="#" class="ml-2 text-decoration-none text-dark edit"><i
                                                    class="fas fa-edit"></i>
                                                Edit
                                            </a>
                                            <button type="submit" class="border-0 ml-2 submit"
                                                style="background: rgba(0, 0, 0, 0)" disabled><i class="fas fa-save"></i>
                                                Simpan
                                            </button>
                                            <button type="button" class="border-0 ml-1 batal"
                                                style="background: rgba(0, 0, 0, 0)" hidden><i
                                                    class="fas fa-window-close"></i>
                                                Batal
                                            </button>
                                        </label>
                                        <textarea class="form-control" id="profil" rows="10" name="profil"
                                            disabled>{{ $profil->profil }}</textarea>
                                    </div>
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

@push('after-script')
    <script>
        $('.edit').on('click', function() {
            $('#profil').prop('disabled', false);
            $('.submit').prop('disabled', false);
            $('.batal').prop('hidden', false);
        })
        $('.batal').on('click', function() {
            $('#profil').prop('disabled', true);
            $('.submit').prop('disabled', true);
            $('.batal').prop('hidden', true);
        })
    </script>
@endpush
