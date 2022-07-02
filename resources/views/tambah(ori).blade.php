<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/mahasiswa"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/mahasiswa/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Nim <input type="number" name="nim" required="required"> <br/>
		Gender <input type="text" name="gender" required="required"> <br/>
		Jurusan <input type="text" name="jurusan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>