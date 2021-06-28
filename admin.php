
 <!-- Modal Aksi -->
  <?php
  include "koneksi.php";
  if(isset($_POST['simpan'])){
    $id=$_POST['id_admin'];
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $status=$_POST['status'];
    $query= mysqli_query($koneksi,"INSERT INTO admin VALUES ('$id','$user','$pass','$status')") ;
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=admin">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=admin">';
                           endif;             
  }elseif(isset($_POST['update'])){
    $id=$_POST['id_admin'];
    $user=$_POST['username'];
    $pass=md5($_POST['password']);
    $status=$_POST['status'];
    $query= mysqli_query($koneksi,"UPDATE admin SET username='$user',password='$pass',status='$status'  WHERE id_admin='$id'") ;
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=admin">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=admin">';
                           endif;
  }elseif(isset($_POST['hapus'])){
    $id=$_POST['id_admin'];
    $query= mysqli_query($koneksi,"DELETE FROM admin WHERE id_admin='$id'") ;
     if($query):
                               
                                echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di hapus!', 'success');</script>" ;
                                echo '<meta http-equiv="Refresh" content="3; URL=index.php?halaman=admin">';
                           else:
                                echo "<script language='javascript'>swal('Oops...', 'Something went wrong!', 'error');</script>" ;
                                echo '<meta http-equiv="Refresh" content="2; URL=index.php?halaman=admin">';
                           endif;
  }
  ?>
  <!-- Tutup Modal Aksi -->

  
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Data Admin</li>
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
                <label for="id_admin">Id Admin </label>
                <input type="text" name="id_admin" class="form-control" placeholder="input id admin">
              </div>
              <div class="form-group">
                <label for="username">Username</label>
                 <input type="text" name="username" class="form-control" placeholder="input username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                 <input type="text" name="password" class="form-control" placeholder="input password">
              </div>
              <div class="form-group">
                <label for="status">Status</label>
                 <input type="text" name="status" class="form-control" placeholder="input status">
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
    <!-- Tutup Modal Tambah -->
    <hr>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Admin</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                <?php
                include "koneksi.php";
      
                $sql= mysqli_query($koneksi, "SELECT * FROM admin");
                // $result = mysql_query($sql) or die (mysql_error());
                while ($data = mysqli_fetch_array($sql)) {
                ?>
              </thead>
              <tbody>
              <tr>
                <td class="align-middle text-center"><?php echo $data['id_admin']; ?></td>
                <td class="align-middle text-center"><?php echo $data['username'];?></td>
                <td class="align-middle text-center"><?php echo $data['password'];?></td>
                <td class="align-middle text-center"><?php echo $data['status'];?></td>
                
                <!-- aksi modal edit -->
                <td class="align-middle text-center">
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#my<?php echo $data['id_admin'];?>"><span aria-hidden="true"></span>Edit</button>
                <div class="modal fade" id="my<?php echo $data['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                <div class="modal-body">
                <form action="" method="POST" role="form">
                  <div class="phAnimate">
                    <label for="id_admin">Id Admin</label>
                    <input type="hidden" name="id_admin" class="form-control" placeholder="Input Id" align="center" value="<?php echo $data['id_admin']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Input Username" align="center" value="<?php echo $data['username']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Input Password" align="center" value="<?php echo $data['password']; ?>">
                  </div>
                  <div class="phAnimate">
                    <label for="status">Status</label>
                    <input type="text" name="Status" class="form-control" placeholder="Input Status" align="center" value="<?php echo $data['Status']; ?>">
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
                <!--tutup modal edit -->

                <!-- Modal Hapus -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myy<?php echo $data['id_admin']; ?>"><span aria-hidden="true"></span>Hapus</button>
                <div class="modal fade" id="myy<?php echo $data['id_admin'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                  <form action="" method="POST" role="form">
                    <div class="phAnimate">
                      <label for="id_admin">Id Admin</label>
                      <input type="hidden" name="id_admin" class="form-control" placeholder="input id" align="center" value="<?php echo $data['id_admin']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control" placeholder="input username" align="center" value="<?php echo $data['username']; ?>">
                    </div>
                    <div class="phAnimate">
                      <label for="password">Password</label>
                      <input type="text" name="password" class="form-control" placeholder="input password" align="center" value="<?php echo $data['password']; ?>">
                    </div>
                    <div class="phAnimate">
                    <label for="status">Status</label>
                    <input type="text" name="Status" class="form-control" placeholder="Input Status" align="center" value="<?php echo $data['Status']; ?>">
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
    </div>
    </div>