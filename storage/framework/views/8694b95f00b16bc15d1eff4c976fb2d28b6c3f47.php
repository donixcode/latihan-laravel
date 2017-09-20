<head>
  <title>1516116210_XII RPL 2_DoniRamdhani</title>
</head>


  
<?php $__env->startSection('content'); ?>

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
        <small>SMK NEGERI 4 BANDUNG</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Kelas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php echo $__env->make('templates/feedback', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="<?php echo e(url ('kelas/add')); ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah</a>
        </div>
        <div class="box-body">
          <table class="table table-stripped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Jurusan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e(!empty($i) ? ++$i : $i = 1); ?></td>
                <td><?php echo e($row->nama_kelas); ?></td>
                <td><?php echo e($row->jurusan); ?></td>
                <td>
                  <a href="<?php echo e(url ("kelas/$row->id_kelas/edit")); ?>" class ="btn btn-warning"><i class="fa fa-pencil"></i></a>
                  <form action="<?php echo e(url ("kelas/$row->id_kelas/delete")); ?>" method="POST" style="display:inline;">
                    <?php echo e(csrf_field()); ?> 
                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-danger"><i class="fa fa-trash"></i></a>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('templates/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>