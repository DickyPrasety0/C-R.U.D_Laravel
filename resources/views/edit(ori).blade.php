<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($mahasiswa as $p)
	<form action="/mahasiswa/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->mahasiswa_id }}"> <br/>
		Nama    <input type="text" required="required" name="nama" value="{{ $p->mahasiswa_nama }}"> <br/>
		Nim     <input type="number" required="required" name="nim" value="{{ $p->mahasiswa_nim }}"> <br/>
		Gender  <input type="text" required="required" name="gender" value="{{ $p->mahasiswa_gender }}"> <br/>
		Jurusan <input type="text" required="required" name="jurusan" value= "{{ $p->mahasiswa_jurusan }}"> <br/>
		<input type= "submit" value="Simpan Data">
    </form>
	@endforeach
		
 
</body>
</html>