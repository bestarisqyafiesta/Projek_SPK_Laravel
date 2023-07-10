@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alternatif</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
      
    <a href="/tambahalternatif" class="btn btn-success">Tambah +</a>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggung jawab</th>
      <th scope="col">Prestasi kerja</th>
      <th scope="col">Kedisiplinan</th>
      <th scope="col">Sikap kerja</th>
      <th scope="col">Kerjasama</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @php
      $no =1;
  @endphp
    @foreach ($data as $row)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->tanggungjawab}}</td>
      <td>{{ $row->prestasikerja}}</td>
      <td>{{ $row->kedisiplinan}}</td>
      <td>{{ $row->sikapkerja}}</td>
      <td>{{ $row->kerjasama}}</td>
      <td>
        <a href="/tampilkanalternatif/{{ $row->id }}" class="btn btn-info">Edit</button> 
        <!-- <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</button>    -->
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

        </div>
</div>
</div>
































@endsection