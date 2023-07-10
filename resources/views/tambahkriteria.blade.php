@extends('layout.admin')

@section('content')

<body>
    <h1 class="text-center">Tambah Kriteria</h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
          <div class="card">
          <div class="card-body">
          <form action="/insertkriteria" method="GET" enctype="multipart/form-data">
              @csrf
          <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kriteria</label>
    <input type="text" name="namakriteria" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Jenis Kriteria</label>
    <select class="form-select" name="jeniskriteria" aria-label="Default select example">
  <option selected>Pilih Jenis Kriteria</option>
  <option value="Benefit">Benefit</option>
  <option value="Cost">Cost</option>
</select>  
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Bobot</label>
    <input type="number" step="0.01" name="bobot" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </div>
        </div>
        </div>
</div>
          </div>
        
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    -->
  </body>

  @endsection