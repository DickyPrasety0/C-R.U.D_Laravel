<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD - Laravel</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<center><h2> Data Mahasiswa - CRUD Laravel </h2></center>
</div>
<br></br>
<div class="pull-right mb-2">
<a class="btn btn-success" href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>No</th>
<th>Nim</th>
<th>Nama</th>
<th>Gender</th>
<th>Jurusan</th>
<th>Ubah</th>
</tr>
<?php $no = 0;?>
@foreach ($mahasiswa as $p)
<?php $no++ ;?>
<tr>
<td>{{ $no }}</td>
<td>{{ $p->mahasiswa_nim }}</td>
<td>{{ $p->mahasiswa_nama }}</td>
<td>{{ $p->mahasiswa_gender }}</td>
<td>{{ $p->mahasiswa_jurusan }}</td>
<td>
<a class="btn btn-primary" href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
@csrf
@method('DELETE')
<a class="btn btn-danger" href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>