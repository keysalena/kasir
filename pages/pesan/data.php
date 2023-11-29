<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      PESAN MASAKAN
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA MASAKAN</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <?php require_once 'kantong.php'; ?>
          </div>
          <div class="box-body table-responsive">
            <table id="masakan" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID MASAKAN</th>
                  <th>NAMA MASAKAN</th>
                  <th>HARGA</th>
                  <th>PEMBELIAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include "conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT * FROM masakan ORDER BY id_masakan
DESC");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <form method="POST" action="index.php?page=data_pesan">
                      <input type="hidden" name="id_masakan" value="<?= $row['id_masakan']; ?>"></input>
                      <td><?php echo $no = $no + 1; ?></td>
                      <td><?php echo $row['id_masakan']; ?></td>
                      <td><?php echo $row['nama_masakan']; ?></td>
                      <td><?php echo $row['harga']; ?></td>
                      <td>
                        <input class="form-control" type="number" name="pembelian" value="1" min="1">
                      </td>
                      <td>
                        <button class="btn btn-primary" type="submit" name="submit">
                          <i class="fa fa-shopping-cart"></i>
                        </button>
                      </td>
                  </tr>
                  </form>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <!-- /.content-wrapper -->
  <!-- Javascript Datatable -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#barang').DataTable();
    });
  </script>