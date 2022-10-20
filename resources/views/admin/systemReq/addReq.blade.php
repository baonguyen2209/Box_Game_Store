@extends('layouts.dashboards')
@section('title', 'System Requirements Add | Box Game')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>New Platform</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
                            <li class="breadcrumb-item active">Add New Platform</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <form method="POST" action="/admin/game/addReq/{{ $id->gameId }}">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="card card-primary">

                                <div class="card-header">
                                    <h3 class="card-title">System Requirements</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- /.tab-pane -->
                                            <div class="tab-content">
                                                <!-- /.tab-pane -->
                                                {{-- <div class="form-group row">
                                                    <button type="button" name="add" id="dynamic-ar"
                                                        class="btn btn-outline-primary">Add Platform</button>
                                                </div> --}}
                                                <div class="form-group row">
                                                    <p>If you need to add more platforms, add it later, don't expect
                                                        anything good from this shit website!!! Cyka Blyat !!!</p>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="os" class="col-sm-2 col-form-label">OS</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="os"
                                                            placeholder="Type of Os" name="os">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="version" class="col-sm-2 col-form-label">Version</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="version"
                                                            placeholder="Version" name="version">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="chipset" class="col-sm-2 col-form-label">Chipset</label>
                                                    <div class="col-sm-10">
                                                        <input type="test" class="form-control" id="chipset"
                                                            placeholder="Chipset Model" name="chipset">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="memory" class="col-sm-2 col-form-label">Memory</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="ram"
                                                            placeholder="RAM" name="ram">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="vga" class="col-sm-2 col-form-label">VGA</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="vga"
                                                            placeholder="Graphic Card" name="vga">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label">Storage</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="storage"
                                                            placeholder="Storage" name="storage">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <button type="submit" class="btn btn-primary">ADD NEW</button>
                                                </div>
                                                <hr>
                                            </div>
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>

                            </div>
                            <!-- /.card -->



                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
@section('footer-script')
    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
