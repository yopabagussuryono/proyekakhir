<?php

		//Kondisi untuk merubah angka ke nama hari
$day = date('d');
if($tgl == 1  || $tgl%31==1){
	$ganti = 'rabu';
}elseif ($tgl == 2 || $tgl%31==2){
	$ganti = 'kamis';
}elseif ($tgl == 3  || $tgl%31==3){
	$ganti = 'jumat';
}elseif ($tgl == 4 || $tgl%31==4){
	$ganti = 'sabtu';
}elseif ($tgl == 5 || $tgl%31==5){
	$ganti = 'minggu';
}elseif ($tgl == 6 || $tgl%31==6){
	$ganti = 'senin';
}elseif ($tgl == 7 || $tgl%31==7){
	$ganti = 'selasa';
}elseif ($tgl == 8 || $tgl%31==8){
	$ganti = 'rabu';
}elseif ($tgl == 9 || $tgl%31==9){
	$ganti = 'kamis';
}elseif ($tgl == 10 || $tgl%31==10){
	$ganti = 'jumat';
}elseif ($tgl == 11 || $tgl%31==11){
	$ganti = 'sabtu';
}elseif ($tgl == 12 || $tgl%31==12){
	$ganti = 'minggu';
}elseif ($tgl == 13 || $tgl%31==13){
	$ganti = 'senin';
}elseif ($tgl == 14 || $tgl%31==14){
	$ganti = 'selasa';
}elseif ($tgl == 15 || $tgl%31==15){
	$ganti = 'rabu';
}elseif ($tgl == 16 || $tgl%31==16){
	$ganti = 'kamis';
}elseif ($tgl == 17 || $tgl%31==17){
	$ganti = 'jumat';
}elseif ($tgl == 18 || $tgl%31==18){
	$ganti = 'sabtu';
}elseif ($tgl == 19 || $tgl%31==19){
	$ganti = 'minggu';
}elseif ($tgl == 20 || $tgl%31==20){
	$ganti = 'senin';
}elseif ($tgl == 21 || $tgl%31==21){
	$ganti = 'selasa';
}elseif ($tgl == 22 || $tgl%31==22){
	$ganti = 'rabu';
}elseif ($tgl == 23 || $tgl%31==23){
	$ganti = 'kamis';
}elseif ($tgl == 24 || $tgl%31==24){
	$ganti = 'jumat';
}elseif ($tgl == 25 || $tgl%31==25){
	$ganti = 'sabtu';
}elseif ($tgl == 26 || $tgl%31==26){
	$ganti = 'minggu';
}elseif ($tgl == 27 || $tgl%31==27){
	$ganti = 'senin';
}elseif ($tgl == 28 || $tgl%31==28){
	$ganti = 'selasa';
}elseif ($tgl == 29 || $tgl%31==29){
	$ganti = 'rabu';
}elseif ($tgl == 30 || $tgl%31==30){
	$ganti = 'kamis';
}else{
	$ganti = 'jumat';
} 
?>