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
                        <div class="card card-light card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                            href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                            aria-selected="true">Profil Lembaga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-one-profile" role="tab"
                                            aria-controls="custom-tabs-one-profile" aria-selected="false">Profil MADIN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                                            href="#custom-tabs-one-messages" role="tab"
                                            aria-controls="custom-tabs-one-messages" aria-selected="false">Profil PAUD</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                                            href="#custom-tabs-one-settings" role="tab"
                                            aria-controls="custom-tabs-one-settings" aria-selected="false">Profil Alumni</a>
                                    </li>
                                    <li class="nav-item  ml-sm-auto mr-3 mt-2">
                                        Edit Data Profil
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="row mb-1" style="margin-right: auto">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-home-tab">
                                                <form action="">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores consectetur voluptatum quam incidunt, possimus esse nesciunt! In ratione sed beatae distinctio reiciendis ipsa neque laudantium pariatur quo tenetur. Eaque nesciunt tempora reiciendis, aliquam inventore illum quaerat, tenetur aspernatur expedita dolorum quod eos rerum, incidunt provident distinctio odio. Eius dolor molestiae voluptates aliquam qui, minima debitis aut sed, dolore optio neque quod labore explicabo eveniet laudantium amet odio. Quos maxime commodi laboriosam expedita quas tempora aperiam corrupti illo animi? Deleniti molestias repellat placeat eveniet nesciunt obcaecati odio quia saepe excepturi sed perspiciatis quas ea consectetur similique qui, voluptatibus neque optio doloribus voluptate dolorem quibusdam! Blanditiis eaque, architecto non esse fugit, debitis rerum repellat iusto placeat culpa natus numquam distinctio laudantium dolor nostrum velit accusamus qui quo voluptatum quidem aperiam inventore optio reiciendis. Consectetur, sed temporibus dolorum a fugiat praesentium iure reprehenderit perferendis nostrum quam tempore, dolores illo minus quis? Atque et magnam quas iusto illum vitae dolor possimus! Velit, voluptates harum libero beatae excepturi quisquam possimus accusamus voluptatem ut repellat ipsam aperiam perferendis delectus molestiae neque odio laboriosam soluta saepe sequi explicabo. Cum ipsa dicta incidunt quisquam ut delectus beatae numquam odio sint rerum consequuntur praesentium commodi, et, facere est.</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-profile-tab">
                                                <form action="">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores consectetur voluptatum quam incidunt, possimus esse nesciunt! In ratione sed beatae distinctio reiciendis ipsa neque laudantium pariatur quo tenetur. Eaque nesciunt tempora reiciendis, aliquam inventore illum quaerat, tenetur aspernatur expedita dolorum quod eos rerum, incidunt provident distinctio odio. Eius dolor molestiae voluptates aliquam qui, minima debitis aut sed, dolore optio neque quod labore explicabo eveniet laudantium amet odio. Quos maxime commodi laboriosam expedita quas tempora aperiam corrupti illo animi? Deleniti molestias repellat placeat eveniet nesciunt obcaecati odio quia saepe excepturi sed perspiciatis quas ea consectetur similique qui, voluptatibus neque optio doloribus voluptate dolorem quibusdam! Blanditiis eaque, architecto non esse fugit, debitis rerum repellat iusto placeat culpa natus numquam distinctio laudantium dolor nostrum velit accusamus qui quo voluptatum quidem aperiam inventore optio reiciendis. Consectetur, sed temporibus dolorum a fugiat praesentium iure reprehenderit perferendis nostrum quam tempore, dolores illo minus quis? Atque et magnam quas iusto illum vitae dolor possimus! Velit, voluptates harum libero beatae excepturi quisquam possimus accusamus voluptatem ut repellat ipsam aperiam perferendis delectus molestiae neque odio laboriosam soluta saepe sequi explicabo. Cum ipsa dicta incidunt quisquam ut delectus beatae numquam odio sint rerum consequuntur praesentium commodi, et, facere est.</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-messages-tab">
                                                <form action="">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores consectetur voluptatum quam incidunt, possimus esse nesciunt! In ratione sed beatae distinctio reiciendis ipsa neque laudantium pariatur quo tenetur. Eaque nesciunt tempora reiciendis, aliquam inventore illum quaerat, tenetur aspernatur expedita dolorum quod eos rerum, incidunt provident distinctio odio. Eius dolor molestiae voluptates aliquam qui, minima debitis aut sed, dolore optio neque quod labore explicabo eveniet laudantium amet odio. Quos maxime commodi laboriosam expedita quas tempora aperiam corrupti illo animi? Deleniti molestias repellat placeat eveniet nesciunt obcaecati odio quia saepe excepturi sed perspiciatis quas ea consectetur similique qui, voluptatibus neque optio doloribus voluptate dolorem quibusdam! Blanditiis eaque, architecto non esse fugit, debitis rerum repellat iusto placeat culpa natus numquam distinctio laudantium dolor nostrum velit accusamus qui quo voluptatum quidem aperiam inventore optio reiciendis. Consectetur, sed temporibus dolorum a fugiat praesentium iure reprehenderit perferendis nostrum quam tempore, dolores illo minus quis? Atque et magnam quas iusto illum vitae dolor possimus! Velit, voluptates harum libero beatae excepturi quisquam possimus accusamus voluptatem ut repellat ipsam aperiam perferendis delectus molestiae neque odio laboriosam soluta saepe sequi explicabo. Cum ipsa dicta incidunt quisquam ut delectus beatae numquam odio sint rerum consequuntur praesentium commodi, et, facere est.</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                                                aria-labelledby="custom-tabs-one-settings-tab">
                                                <form action="">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                            rows="14">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non maiores consectetur voluptatum quam incidunt, possimus esse nesciunt! In ratione sed beatae distinctio reiciendis ipsa neque laudantium pariatur quo tenetur. Eaque nesciunt tempora reiciendis, aliquam inventore illum quaerat, tenetur aspernatur expedita dolorum quod eos rerum, incidunt provident distinctio odio. Eius dolor molestiae voluptates aliquam qui, minima debitis aut sed, dolore optio neque quod labore explicabo eveniet laudantium amet odio. Quos maxime commodi laboriosam expedita quas tempora aperiam corrupti illo animi? Deleniti molestias repellat placeat eveniet nesciunt obcaecati odio quia saepe excepturi sed perspiciatis quas ea consectetur similique qui, voluptatibus neque optio doloribus voluptate dolorem quibusdam! Blanditiis eaque, architecto non esse fugit, debitis rerum repellat iusto placeat culpa natus numquam distinctio laudantium dolor nostrum velit accusamus qui quo voluptatum quidem aperiam inventore optio reiciendis. Consectetur, sed temporibus dolorum a fugiat praesentium iure reprehenderit perferendis nostrum quam tempore, dolores illo minus quis? Atque et magnam quas iusto illum vitae dolor possimus! Velit, voluptates harum libero beatae excepturi quisquam possimus accusamus voluptatem ut repellat ipsam aperiam perferendis delectus molestiae neque odio laboriosam soluta saepe sequi explicabo. Cum ipsa dicta incidunt quisquam ut delectus beatae numquam odio sint rerum consequuntur praesentium commodi, et, facere est.</textarea>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card -->
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
