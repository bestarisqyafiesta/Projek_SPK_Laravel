@extends('layout.admin')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data kriteria</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
      
    <a href="/tambahkriteria" class="btn btn-success">Tambah +</a>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kriteria</th>
      <th scope="col">Jenis Kriteria</th>
      <th scope="col">Bobot</th>
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
      <td>{{ $row->namakriteria}}</td>
      <td>{{ $row->jeniskriteria}}</td>
      <td>{{ $row->bobot}}</td>
      <td>
        <a href="/tampilkankriteria/{{ $row->id }}" class="btn btn-info">Edit</button> 
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