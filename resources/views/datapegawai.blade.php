@extends('template.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data karyawan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="container">
      
    <a href="{{ url('tambahpegawai')}}" class="btn btn-success">Tambah +</a>
        <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">No Telepon</th>
      <th scope="col">Email</th>
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
      <td>{{ $row->nama}}</td>
      <td>{{ $row->jeniskelamin}}</td>
      <td>0{{ $row->notelepon}}</td>
      <td>{{ $row->email}}</td>

      <td>
      
      <a href="{{ url('tampilkandata')}}/{{ $row->id }}" class="btn btn-info">Edit</button> 
      <a href="{{ url('delete')}}/{{ $row->id }}" class="btn btn-danger">Delete</button>   
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

        </div>
</div>
</div>
































@endsection