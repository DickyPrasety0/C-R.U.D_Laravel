<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Data MHS - CRUD Laravel 9 </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<center><h2>Edit Data Mahasiswa</h2></center>
</div>
<div class="pull-right">

</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="/mahasiswa/update" method="post" enctype="multipart/form-data">
@csrf
@foreach($mahasiswa as $p)
<input type="hidden" name="id" value="{{ $p->mahasiswa_id }}">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nim:</strong>
<br></br>
<input type="number" required="required" name="nim" value="{{ $p->mahasiswa_nim }}">
@error('nim')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama:</strong>
<br></br>
<input type="text" required="required" name="nama" value="{{ $p->mahasiswa_nama }}">
@error('nama')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Gender:</strong>
<br></br>
<input type="text" required="required" name="gender" value="{{ $p->mahasiswa_gender }}">
@error('gender')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jurusan:</strong>
<br></br>
<input type="text" required="required" name="jurusan" value= "{{ $p->mahasiswa_jurusan }}">
@error('jurusan')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
@endforeach
<a class="btn btn-warning ml-3" href="/mahasiswa" enctype="multipart/form-data"> Kembali </a>
<button type="submit" class="btn btn-primary ml-3" value="Simpan Data">Submit</button>
</div>
</form>
</div>
</body>
</html>