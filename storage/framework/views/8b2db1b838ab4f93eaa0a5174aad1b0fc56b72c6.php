<head>
  <title>1516116210_XII RPL 2_DoniRamdhani</title>
</head>



<?php $__env->startSection('content'); ?>
<!-- Context Header (Page Header)-->
<section class="content-header">
	<h1>
		<?php echo e(empty($result) ? ' Tambah' : 'Edit'); ?> Data Kelas
		<small>SMK Negeri 4 Bandung</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Data Kelas</li>
		<li class="active"><?php echo e(empty($result) ? ' Tambah' : 'Edit'); ?> Data Kelas</li>
	</ol>
</section>

<!--Main Content-->

<section class="content">
	<?php echo $__env->make('templates/feedback', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!--Default Box-->
	<div class="box">
		<div class="box-header with-border">
			<a href="<?php echo e(url ('/')); ?>" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
		</div>
		<div class="box-body">
			<form action="<?php echo e(empty($result) ? url('kelas/add') : url("kelas/$result->id_kelas/edit")); ?>" class="form-horizontal" method="POST">
				<?php echo e(csrf_field()); ?>


				<?php if(!empty($result)): ?>
					<?php echo e(method_field('patch')); ?>

				<?php endif; ?>
				<div class="form-group">
					<label class="control-label col-sm-2">Nama Kelas</label>
					<div class="col-sm-10">
						<input type="text" name="nama_kelas" class="form-control" placeholder="Masukan Nama Kelas" 
						value="<?php echo e(@$result->nama_kelas); ?>" />
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2">Jurusan</label>
					<div class="col-sm-10">
						<input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" 
						value="<?php echo e(@$result->jurusan); ?>" />
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-10 col-sm-offset-2">
						<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>