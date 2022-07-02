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
<?php if($message = Session::get('success')): ?>
<div class="alert alert-success">
<p><?php echo e($message); ?></p>
</div>
<?php endif; ?>
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
<?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $no++ ;?>
<tr>
<td><?php echo e($no); ?></td>
<td><?php echo e($p->mahasiswa_nim); ?></td>
<td><?php echo e($p->mahasiswa_nama); ?></td>
<td><?php echo e($p->mahasiswa_gender); ?></td>
<td><?php echo e($p->mahasiswa_jurusan); ?></td>
<td>
<a class="btn btn-primary" href="/mahasiswa/edit/<?php echo e($p->mahasiswa_id); ?>">Edit</a>
<?php echo csrf_field(); ?>
<?php echo method_field('DELETE'); ?>
<a class="btn btn-danger" href="/mahasiswa/hapus/<?php echo e($p->mahasiswa_id); ?>">Hapus</a>
</form>
</td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html><?php /**PATH C:\Users\P\Documents\crud\resources\views/index.blade.php ENDPATH**/ ?>