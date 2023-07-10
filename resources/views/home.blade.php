@extends('template.index')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Home</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Welcome to Decision Support System :)</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            This system can help someone to make decisions using Simple Additive Weighting Algorithm.
                            <br> How to use:
                            <ol>
                                <h6>Aplikasi ini merupakan aplikasi sistem pendukung keputusan untuk menentukan karyawan terbaik
                                    dengan metode SAW (Simple Additive Weighting) yang mengharuskan untuk menginput data karyawan dulu kemudian baru data kriteria dan tahap akhir dengan 
                                    melakukan perangkingan pada data rangking dan melihat laporan hasil akhir.
                                </h6>
                            </ol>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
