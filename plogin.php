<?php
include 'koneksi.php';
$username = $_POST['username'];
$password =md5($_POST['password']);
$cek      = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
 
if($result>0){
    if ($data['status'] == 'admin') {
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['status']    = $data['status'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='index.php'</script>";
 
    }
    elseif($data['status'] == 'user'){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['status']    = $data['status'];
        echo "<script>alert('Selamat Datang, User.');document.location.href='user.php'</script>";
    }
}else{
    header("location:login.php");
}
?>