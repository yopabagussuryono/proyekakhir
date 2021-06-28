
 <!-- Modal Aksi -->
 <?php
  include "koneksi.php";
  if(isset($_POST['simpan'])){
    $id=$_POST['id_bcoklat'];
    $bulan=$_POST['bulan'];
    $tanggal=$_POST['tanggal'];
    $hari=$_POST['hari'];
    $order_stok=$_POST['order_stok'];
    $query=mysqli_query($koneksi,"INSERT INTO bcoklat VALUES ('$id','$bulan','$tanggal','$hari','$order_stok')") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=user.php?halaman=stok-bcoklatu">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=user.php?halaman=stok-bcoklatu">';
                           endif;             
  }elseif(isset($_POST['update'])){
   $id=$_POST['id_bcoklat'];
    $bulan=$_POST['bulan'];
    $tanggal=$_POST['tanggal'];
    $hari=$_POST['hari'];
    $order_stok=$_POST['order_stok'];
    $query=mysqli_query($koneksi,"UPDATE bcoklat SET bulan='$bulan',tanggal='$tanggal',hari='$hari',order_stok='$order_stok' WHERE id_bcoklat='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=stok-bcoklat">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=stok-bcoklat">';
                           endif;
  }elseif(isset($_POST['hapus'])){
    $id=$_POST['id_bcoklat'];
    $query=mysqli_query($koneksi,"DELETE FROM bcoklat WHERE id_bcoklat='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di hapus!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=stok-bcoklat">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=stok-bcoklat">';
                           endif;
  }
  ?>
  <!-- Tutup Modal Aksi -->

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="user.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data order bubuk coklat 2019</li>
      </ol>

  <!-- Modal Tambah -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal"><span aria-hidden="true"></span>Tambah Data</button>
    <!-- Modal -->
   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="POST" role="form">
              <div class="form-group">
                <?php
                include "koneksi.php";
                $ambil = mysqli_query($koneksi, "SELECT MAX(id_bcoklat) AS hasil FROM bcoklat");
                $id = mysqli_fetch_array($ambil) OR die(mysql_error());
                $otomatis = $id['hasil'] + 1;
                ?>
                <label for="id_bcoklat">Id bubuk coklat 2019</label>
                <input type="text" name="id_bcoklat" class="form-control" value="<?php echo $otomatis ?>" readonly="">
              </div>
              <div class="form-group">
                <label for="bulan">Bulan </label>
                 <input type="text" name="bulan" class="form-control" placeholder="input bulan ...">
              </div>
              <div class="form-group">
                <label for="tanggal">Tanggal</label>
                 <input type="text" name="tanggal" class="form-control" placeholder="input tanggal ...">
              </div>
              <div class="form-group">
                <label for="hari">hari</label>
                 <input type="text" name="hari" class="form-control" placeholder="input hari ...">
              </div>
              <div class="form-group">
                <label for="order_stok">Order bubuk coklat 2019</label>
                 <input type="text" name="order_stok" class="form-control" placeholder="input order stok 2019 ...">
              </div>
              <div class="modal-footer">
                 <button type="reset" name="simpan" class="btn btn-primary">Reset</button>
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" name="simpan" class="btn btn-primary">Tambah Data</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <hr>
    
   
    <hr>
      <!-- Example DataTables Card-->
     <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Data Order Bubuk Coklat 2019
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered nowrap display" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Bulan </th>
                  <th>Tanggal</th>
                  <th>Hari</th>
                  <th>Order Stok</th>
                </tr>
              
              </thead>
              <tbody>

                 <?php
                include "koneksi.php";
                
                $sql = mysqli_query($koneksi, "SELECT * FROM bcoklat");
                // $result = mysql_query($sql) or die (mysql_error());
                while ($data = mysqli_fetch_array($sql)) {
                ?>
              <tr>
                <td class="align-middle text-center"><?php echo $data['id_bcoklat']; ?></td>
                <td class="align-middle text-center"><?php echo $data['bulan'];?></td>
                <td class="align-middle text-center"><?php echo $data['tanggal'];?></td>
                <td class="align-middle text-center"><?php echo $data['hari'];?></td>
                <td class="align-middle text-center"><?php echo $data['order_stok'];?></td>

              </tr>
              <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      
    

     
    
