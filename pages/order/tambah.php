<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAMBAH ORDER
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">TAMBAH ORDER</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" method="post" action="pages/order/tambah_proses.php">
            <div class="box-body">
              <div class="form-group">
                <label>NO MEJA</label>
                <input type="text" name="no_meja" class="form-control" placeholder="Nomor Meja" required>
              </div>
              <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
              <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
          </form>
        </div>
        <!-- /.box -->
      </div>
    </div>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->