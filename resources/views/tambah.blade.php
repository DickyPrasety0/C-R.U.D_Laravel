<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambahkan Data Mahasiswa CRUD Laravel 9</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<center><h2>Tambah Data</h2></center>
</div>
<br></br>
<div class="pull-right">

</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="/mahasiswa/store" method="post" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nim:</strong>
<br></br>
<input type="number" name="nim" required="required">
@error('nim')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama:</strong>
<br></br>
<input type="text" name="nama" required="required">
@error('nama')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
<br></br>
<input type="text" name="gender" required="required">
@error('gender')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jurusan:</strong>
<br></br>
<input type="text" name="jurusan" required="required">
@error('jurusan')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<a class="btn btn-warning ml-3" href="/mahasiswa"> Kembali </a>
<button type="submit" value="Simpan Data" class="btn btn-primary ml-3"> Submit </button>
</div>
</form>
</body>
</html>