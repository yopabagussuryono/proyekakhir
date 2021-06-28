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
    $id=$_POST['id_ramal'];
    $query=mysqli_query($koneksi,"DELETE FROM hasil_ramalbcoklat WHERE id_ramal='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di hapus!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=data-ramalbcoklat">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=data-ramalbcoklat">';
                           endif;
  }
  ?>
  <!-- Tutup Modal Aksi -->

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"> Data Ramal Bubuk Coklat`</li>
      </ol>   
   
    <hr>
      <!-- Example DataTables Card-->
     <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Data Ramal Bubuk Coklat
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered nowrap display" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tanggal </th>
                  <th>Hari</th>
                  <th>Bulan</th>
                  <th>Tahun</th>
                  <th>Hasil</th>
                  <th>indeks musim</th>
                  <th> aksi </th>
                </tr>
              
              </thead>
              <tbody>

                 <?php
                include "koneksi.php";
                
                $sql = mysqli_query($koneksi, "SELECT * FROM hasil_ramalbcoklat");
                // $result = mysql_query($sql) or die (mysql_error());
                while ($data = mysqli_fetch_array($sql)) {
                ?>
              <tr>
                <td class="align-middle text-center"><?php echo $data['id_ramal']; ?></td>
                <td class="align-middle text-center"><?php echo $data['tanggal_ramal'];?></td>
                <td class="align-middle text-center"><?php echo $data['hari_ramal'];?></td>
                <td class="align-middle text-center"><?php echo $data['bulan_ramal'];?></td>
                <td class="align-middle text-center"><?php echo $data['tahun_ramal'];?></td>
                <td class="align-middle text-center"><?php echo $data['hasil_ramal'];?></td>
                <td class="align-middle text-center"><?php echo $data['indeks_musim'];?></td>

               <!-- Modal Hapus -->
               <td class="align-middle text-center">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myy<?php echo $data['id_ramal']; ?>"><span aria-hidden="true"></span>Hapus</button>
                <div class="modal fade" id="myy<?php echo $data['id_ramal'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST" role="form">
                  <label for="id_ramal">Id ramal</label>
                    <input name="id_ramal" class="form-control" placeholder="Input ramal" align="center" value="<?php echo $data['id_ramal']; ?>" readonly>
                  </div>
                  <div class="phAnimate">
                    <label for="tanggal_ramal">Tanggal </label>
                    <input type="text" name="tanggal_ramal" class="form-control" placeholder="Input tanggal " align="center" value="<?php echo $data['tanggal_ramal']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="hari-ramal">Hari</label>
                    <input type="text" name="hari_ramal" class="form-control" placeholder="Input hari" align="center" value="<?php echo $data['hari_ramal']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="bulan_ramal">Bulan</label>
                    <input type="text" name="bulan_ramal" class="form-control" placeholder=" bulan" align="center" value="<?php echo $data['bulan_ramal']; ?>">
                  </div>
                   <div class="phAnimate">
                    <label for="tahun_ramal">Tahun</label>
                    <input type="text" name="tahun_ramal" class="form-control" placeholder=" tahun" align="center" value="<?php echo $data['tahun_ramal']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="hasil_ramal">Hasil</label>
                    <input type="text" name="hasil_ramal" class="form-control" placeholder=" hasil" align="center" value="<?php echo $data['hasil_ramal']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="hasil_ramal">Hasil indeks musim</label>
                    <input type="text" name="hasil_ramal" class="form-control" placeholder="hasil indeks musim" align="center" value="<?php echo $data['indeks_musim']; ?>">
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
      
    
