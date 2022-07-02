<!DOCTYPE html>
<html>
<head>
	<title>Create CRUD In Laravel </title>
</head>
<body>
 
	<h2>Crud</h2>
	<h3>Data Mahasiswa</h3>
 
	<a href="/mahasiswa/tambah"> + Tambah Mahasiswa Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Gender</th>
			<th>Jurusan</th>
			<th>Opsi</th>
		</tr>
		@foreach($mahasiswa as $p)
		<tr>
			<td>{{ $p->mahasiswa_nama }}</td>
			<td>{{ $p->mahasiswa_nim }}</td>
			<td>{{ $p->mahasiswa_gender }}</td>
			<td>{{ $p->mahasiswa_jurusan }}</td>
			<td>
				<a href="/mahasiswa/edit/{{ $p->mahasiswa_id }}">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $p->mahasiswa_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>