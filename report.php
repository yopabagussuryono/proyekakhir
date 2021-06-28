
 <!-- Modal Aksi -->
 <?php
  include "koneksi.php";
  if(isset($_POST['simpan'])){
    $id=$_POST['id_report'];
    $judul=$_POST['judul_report'];
    $isi=$_POST['isi_report'];
    $query=mysqli_query($koneksi,"INSERT INTO report VALUES ('$id','$judul','$isi')") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=user.php?halaman=reportu">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=user.php?halaman=reportu">';
                           endif;             
  }elseif(isset($_POST['update'])){
    $id=$_POST['id_report'];
    $judul=$_POST['judul_report'];
    $isi=$_POST['isi_report'];
    $query=mysqli_query($koneksi,"UPDATE report SET judul_report='$judul',isi_report='$isi' WHERE id_report='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=report">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=report">';
                           endif;
  }elseif(isset($_POST['hapus'])){
    $id=$_POST['id_report'];
    $query=mysqli_query($koneksi,"DELETE FROM report WHERE id_report='$id'") or die(mysql_error());
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di hapus!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=report">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=report">';
                           endif;
  }
  ?>
  <!-- Tutup Modal Aksi -->

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Report</li>
      </ol>   
   
    <hr>

      <!-- Example DataTables Card-->
     <div class="card mb-3">

        <div class="card-header">
          <i class="fa fa-table"></i> Data Report
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="table table-bordered nowrap display" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>judul</th>
                  <th>isi</th>
                  <th>aksi</th>
                </tr>
              
              </thead>
              <tbody>

                 <?php
                include "koneksi.php";
                
                $sql = mysqli_query($koneksi, "SELECT * FROM report");
                // $result = mysql_query($sql) or die (mysql_error());
                while ($data = mysqli_fetch_array($sql)) {
                ?>
              <tr>
                <td class="align-middle text-center"><?php echo $data['id_report']; ?></td>
                <td class="align-middle text-center"><?php echo $data['judul_report'];?></td>
                <td class="align-middle text-center"><?php echo $data['isi_report'];?></td>
                
                <!-- Modal Hapus -->
                <td class="align-middle text-center">
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myy<?php echo $data['id_report']; ?>"><span aria-hidden="true"></span>Hapus</button>
                <div class="modal fade" id="myy<?php echo $data['id_report'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <form action="" method="POST" role="form">
                  <div class="phAnimate">
                    <label for="id_report">Id report</label>
                    <input type="hidden" name="id_report" class="form-control" placeholder="Input Id" align="center" value="<?php echo $data['id_report']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="report">Judul Report</label>
                    <input type="text" name="judul_report" class="form-control" placeholder="Input Judul Report" align="center" value="<?php echo $data['judul_report']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="isi_report">Isi Report</label>
                    <input type="text" name="isi_report" class="form-control" placeholder="Input Isi" align="center" value="<?php echo $data['isi_report']; ?>">
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
      
    

     
    
