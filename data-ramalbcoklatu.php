<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="user.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">data ramal bubuk coklat 2020</li>
      </ol>

<!-- Example DataTables Card-->
<div class="card mb-3">

<div class="card-header">
  <i class="fa fa-table"></i> Data ramal Bubuk Coklat 2020
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
        
       
     
      <?php } ?>
      </tbody>
    </table>

  </div>
</div>
</div>


