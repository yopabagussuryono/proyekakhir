<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html PUBLIC >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sistem Peramalan Kebutuhan Order Stok dengan Trend Moment</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="asset/css/style.css" rel="stylesheet" type="text/css" />
<link href="asset/css/layout.css" rel="stylesheet" type="text/css" />
<script src="asset/js/maxheight.js" type="text/javascript"></script>
<script src="asset/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="asset/js/cufon-yui.js" type="text/javascript"></script>
<script src="asset/js/cufon-replace.js" type="text/javascript"></script>
<script src="asset/js/Kozuka_Gothic_Pro_OpenType_300.font.js" type="text/javascript"></script>
<script src="asset/js/Kozuka_Gothic_Pro_OpenType_500.font.js" type="text/javascript"></script>

</head>
					
<body id="page1" onload="new ElementMaxHeight();">

<!-- START PAGE SOURCE -->
<div id="header">
  <div class="container">
    <div class="logo-box">
      <h1><a href="login.php"><strong>SISTEM</strong></a></h1>
      <h2>
      <p>PERAMALAN KEBUTUHAN ORDER STOK<br/>
      DENGAN METODE TREND MOMENT <br/></p></h2>
      </div>
    </div>
</div>

<div id="content">
  <div class="container">
    <div class="indent">
      <div class="wrapper">
        <div class="mainContent">
          <h2><span>Selamat Datang di <br/> SISTEM PERAMALAN KEBUTUHAN ORDER STOK</span></h2>
          <p>Sistem peramalan Kebutuhan Order Stok dengan menggunakan metode trend moment ini nantinya akan digunakan untuk meramalkan banyak order untuk hari selanjutnya agar tidak sampai terjadi kelebihan dan kekurangan persediaan Order Stok. sistem peramalan ini menggunakan data bulan Oktober sampai Desember ditahun 2019 dan memprediksi beberapa data di bulan Januari tahun 2020. sistem ini juga bisa digunakan untuk mencatat setiap order stok per hari dan juga bisa mencetaknya.
		  </p>
        </div>
       
        <div class="aside">
          <div class="box1">
            <div class="top">
              <div class="bottom">
                <div class="inner">
                  <h3>Login </h3>
                  <!-- cek login -->
                  <div class="panel-body">
                      <form role="form" method="POST" action="plogin.php">
                    <br />
                      <div class="form-group input-group">
                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" size="32"/>
                        </div> <br/>
                          <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                          <input type="password" class="form-control" name="password" placeholder ="Masukkan Password" size="32"/>
                            </div>
                            <br/>
                          <button class="btn btn-primary" name="login" size="20">Login </button>
                              <hr /> 
                                </form>
                </div>         
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
        </div>
        </div>
        </div>
   
<div id="footer">
  <div class="container">
    <div class="inside">
      <div class="wrapper">
       
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript">Cufon.now();</script>
<!-- END PAGE SOURCE -->
</html>