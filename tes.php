<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="user.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hasil Hitung Peramalan</li>
      </ol>

      <!-- isi konten cari nilai x, y, xy, xx, rata x, rata y-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Nilai X, Y, XY, X<sup>2</sup>, Rata" X, Rata" Y</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <tr align="center">
                  <th align="center">X</th>
                  <th align="center">Y</th>
                  <th align="center">XY</th>
                  <th align="center">X<sup>2</sup></th>
                  <th align="center">Rata" X</th>
                  <th align="center">Rata" Y</th>
                </tr>
                <?php
                include "koneksi.php";
                $ambil = mysqli_query($koneksi, "SELECT * FROM bcoklat") ;
                if (mysqli_num_rows($ambil) > 0) {
                  $x = 1;
                  $jumlah_x = 0;
                  $jumlah_y = 0;
                  $jumlah_xx = 0;
                  $jumlah_xy = 0;
                  while ($data = mysqli_fetch_array($ambil)) {
                    $jumlah_x += $x;
                    $jumlah_y += $data['order_stok'];
                    $jumlah_xy += ($x * $data['order_stok']);
                    $jumlah_xx += ($x * $x);
                    ?>
                    <?php $x++; } ?>
                <!-- Mencari Rata - Rata -->
                <?php
                $jumlah_data = mysqli_query($koneksi, "SELECT COUNT(id_bcoklat) as jumlahdata FROM bcoklat") or die (mysqli_error($koneksi));
                $r=mysqli_fetch_array($jumlah_data);

                $rata2_x = $jumlah_x / $r['jumlahdata'];
                $rata2_y = $jumlah_y / $r['jumlahdata'];
                ?>
                
                <tbody>
              <tr>
                <td align="center"><?=$jumlah_x;?></td>
                <td align="center"><?=$jumlah_y;?></td>
                <td align="center"><?=$jumlah_xy;?></td>
                <td align="center"><?=$jumlah_xx;?></td>
                <td align="center"><?=$rata2_x;?></td>
                <td align="center"><?=$rata2_y;?></td>
              </tr>
              <?php } ?>
              </tbody>                       
            </table>
          </div>
        </div>
      </div>
      <!-- isi konten cari nilai x, y, xy, xx, rata x, rata y -->

      <!-- isi konten cari nilai a dan nilai b -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Nilai A dan Nilai B</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <tr align="center">
                  <th align="center">Nilai A</th>
                  <th align="center">Nilai B</th>
                </tr>
                <?php
                //Menghitung nilai B
                $Angka1 = ($r['jumlahdata'] * $jumlah_xy);
                $angka1a = ($jumlah_x * $jumlah_y);
                $hasil1 = $Angka1-$angka1a;
                $Angka2 = ($r['jumlahdata'] * $jumlah_xx);
                $angka2a = ($jumlah_x * $jumlah_x);
                $hasil2 = $Angka2 - $angka2a;
                $NilaiB = $hasil1 / $hasil2;
                //Menghitung nilai A
                $Angka11 = $NilaiB * $jumlah_x;
                $angka12 = $jumlah_y - $Angka11 ;
                $NilaiA = $angka12 / $r['jumlahdata'] ;
                ?>    
              <tbody>
              <tr>
                <td align="center"><?=$NilaiA;?></td>
                <td align="center"><?=$NilaiB;?></td>
              </tr>
              </tbody>                       
            </table>
          </div>
        </div>
      </div>
      <!-- Tutup konten cari nilai A dan Nilai B -->

      <!-- Isi konten cari Nilai Hasil Hitung dengan Trend Moment --> 
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Hasil Peramalan dengan Trend Moment</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <tr align="center">
                  <th align="center">tanggal</th>
                  <th align="center">hari</th>
                  <th align="center">bulan</th>
                  <th align="center">tahun</th>
                  <th align="center">Periode (X)</th>
                  <th align="center">Trend Moment</th>
                  <th align="center">Indeks Musim</th>
                  
                </tr>
                <?php
                include "koneksi.php";               

                $tgl=$_POST["tgl"];

                ?>
                <?php
                
                include "koneksi.php";

                $jumlah_data = mysqli_query($koneksi, "SELECT COUNT(id_bcoklat) as jumlahdata FROM bcoklat") or die (mysqli_error($koneksi));
                $r=mysqli_fetch_array($jumlah_data);

                $data =  $r['jumlahdata'];
                
                ?>
                <?php
                include "koneksi.php";
                include "kondisi_tgl.php";

                $jumlahMSE = 0;
                $jumlahMAD = 0;{

                  $data1 = $data+$tgl;  
                  $prediksi1 = $NilaiB * $data1;
                  $hasil = $NilaiA + $prediksi1;

                   $ambil2 = mysqli_query($koneksi, "SELECT order_stok FROM bcoklat WHERE hari='$day'") or die (mysqli_error($koneksi)) ; 
                 while ($error = mysqli_fetch_array($ambil2));{
                    $MSE = (abs(pow($hasil - $error['order_stok'],2)) / $r['jumlahdata']);
                    $MAD = (abs($hasil - $error['order_stok']) / $r['jumlahdata']);

                    $jumlahMSE = $MSE + $jumlahMSE;
                    $jumlahMAD = $MAD + $jumlahMAD;

                ?>
                 <?php
                include "kondisi_tgl.php";
                include "koneksi.php";
                $bulan = 'Januari';

                $jumlah_bulan = mysqli_query($koneksi, "SELECT AVG(order_stok) as jumlah_jual FROM bcoklat WHERE hari='$day'") or die (mysqli_error($koneksi));
                $a=mysqli_fetch_array($jumlah_bulan);

            
                $b =  $a['jumlah_jual'];
                $bagi_indeks = $b/ $rata2_y;
                $indeks_musim = $bagi_indeks * $hasil;
                ?>

                <?php
                include "koneksi.php";

                $simpan = mysqli_query($koneksi,"INSERT INTO hasil_ramalbcoklat VALUES ('$tgl','$tgl','$day','$bulan','2020','$hasil','$indeks_musim')") or die(mysqli_error($koneksi));
                ?>
              <tbody>
              <tr>
                <td align="center"><?=$tgl;?></td>
                <td align="center"><?=$day;?></td>                             
                <td align="center"><?=$bulan;?></td>
                <td align="center"><?=2020;?></td>
                 <td align="center"><?=$data1;?></td>
                <td align="center"><?=number_format($hasil,2);?></td>
                <td align="center"><?=number_format($indeks_musim,2);?></td>
                
              </tr>
              <?php }?>
              </tbody>
              <?php }?>
                                    
            </table>
          </div>
        </div>
      </div>