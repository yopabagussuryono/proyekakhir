
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
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=stok-bcoklat">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=stok-bcoklat">';
                           endif;             
  }elseif(isset($_POST['update'])){
   $id=$_POST['id_bcoklat2020'];
    $hari=$_POST['hari'];
    $tanggal=$_POST['tanggal'];
    $bulan=$_POST['bulan'];
    $orderstok_2020=$_POST['orderstok_2020'];
    $query=mysqli_query($koneksi,"UPDATE bcoklat2020 SET hari='$hari',tanggal='$tanggal',bulan='$bulan',orderstok_2020='$orderstok_2020' WHERE id_bcoklat2020='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=stok-bcoklat2020">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=stok-bcoklat2020">';
                           endif;
  }elseif(isset($_POST['hapus'])){
    $id=$_POST['id_bcoklat2020'];
    $query=mysqli_query($koneksi,"DELETE FROM bcoklat2020 WHERE id_bcoklat2020='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di hapus!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=stok-bcoklat2020">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=stok-bcoklat2020">';
                           endif;
  }
  ?>
  <!-- Tutup Modal Aksi -->

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data order bubuk coklat 2020</li>
      </ol>   
   
    <hr>
      <!-- Example DataTables Card-->
     <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Data Order Bubuk Coklat 2020
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered nowrap display" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Hari </th>
                  <th>Tanggal</th>
                  <th>Bulan</th>
                  <th>Order Stok</th>
                  <th>Aksi</th>
                </tr>
              
              </thead>
              <tbody>

                 <?php
                include "koneksi.php";
                
                $sql = mysqli_query($koneksi, "SELECT * FROM bcoklat2020");
                // $result = mysql_query($sql) or die (mysql_error());
                while ($data = mysqli_fetch_array($sql)) {
                ?>
              <tr>
                <td class="align-middle text-center"><?php echo $data['id_bcoklat2020']; ?></td>
                <td class="align-middle text-center"><?php echo $data['hari'];?></td>
                <td class="align-middle text-center"><?php echo $data['tanggal'];?></td>
                <td class="align-middle text-center"><?php echo $data['bulan'];?></td>
                <td class="align-middle text-center"><?php echo $data['orderstok_2020'];?></td>

                
                <!-- aksi modal edit -->
                <td class="align-middle text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#my<?php echo $data['id_bcoklat2020'];?>"><span aria-hidden="true"></span>Edit</button>
                <div class="modal fade" id="my<?php echo $data['id_bcoklat2020'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                <div class="modal-body">
                <form action="" method="POST" role="form">
                  <div class="phAnimate">
                      <label for="id_bcoklat2020">Id Bubuk Coklat 2020</label>
                      <input type="text" name="id_bcoklat2020" class="form-control" placeholder="input Id Bubuk Coklat 2020" value="<?php echo $data['id_bcoklat2020']; ?>" readonly>
                    </div>
                    <div class="phAnimate">
                      <label for="hari">Hari </label>
                      <input type="text" name="hari" class="form-control" placeholder="input Bulan " value="<?php echo $data['hari']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="tanggal">Tanggal</label>
                      <input type="text" name="tanggal" class="form-control" placeholder="input Tanggal"  value="<?php echo $data['tanggal']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="bulan">Bulan</label>
                      <input type="text" name="bulan" class="form-control" placeholder="input Hari"  value="<?php echo $data['bulan']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="order_stok">Order Stok bubuk coklat 2020</label>
                      <input type="text" name="orderstok_2020" class="form-control" placeholder="input order stok 2020"  value="<?php echo $data['orderstok_2020']; ?>">
                    </div>
                  <div class="modal-footer">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Reset</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary">Edit Data</button>
                  </div>
                </form>
                </div>
                </div>
                </div>
                </div>

               <!-- Modal Hapus -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myy<?php echo $data['id_bcoklat2020']; ?>"><span aria-hidden="true"></span>Hapus</button>
                <div class="modal fade" id="myy<?php echo $data['id_bcoklat2020'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST" role="form">
                    <div class="phAnimate">
                      <label for="id_bcoklat2020">Id Bubuk Coklat 2020</label>
                      <input type="hidden" name="id_bcoklat2020" class="form-control" placeholder="input Id Bubuk Coklat 2020" value="<?php echo $data['id_bcoklat2020']; ?>" readonly>
                    </div>
                    <div class="phAnimate">
                      <label for="hari">Hari </label>
                      <input type="text" name="hari" class="form-control" placeholder="input Bulan " value="<?php echo $data['hari']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="tanggal">Tanggal</label>
                      <input type="text" name="tanggal" class="form-control" placeholder="input Tanggal"  value="<?php echo $data['tanggal']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="bulan">Bulan</label>
                      <input type="text" name="bulan" class="form-control" placeholder="input Hari"  value="<?php echo $data['bulan']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="order_stok">Order Stok bubuk coklat 2020</label>
                      <input type="text" name="orderstok_2020" class="form-control" placeholder="input order stok 2020"  value="<?php echo $data['orderstok_2020']; ?>">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class=" btn btn-primary btn-danger" name="hapus">Hapus Data</button>
                    </div>
                  </form>
                </div>
                </div>
                </div>
                </div>
                <!-- Tutup Modal Hapus -->

              </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
      
    
