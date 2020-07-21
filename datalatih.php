<?php
if (version_compare(phpversion(), "5.3.0", ">=")  == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);  
  ?>
<?php
session_start();
//error_reporting(0);
require_once"konmysqli.php";

$mnu=$_GET["mnu"];
date_default_timezone_set("Asia/Jakarta");

?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIKDIS &mdash; Sistem Pakar Diagnosa Diabetes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Sistem Pakar Diagnosa Diabetes" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	
	<div class="page">
	<nav class="gtco-nav" role="navigation" style="background-image: url(bg/hospital-1.jpg)">
   <div class="overlay" ></div>
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="home1.php">Diagnosa Diabetes<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-0">
					<ul>
						<?php
if($_SESSION["cstatus"]=="Administrator"){	
      echo"
	  <li><a href='home1.php?mnu=home'>Home</a></li>
      <li><a href='admin.php?mnu=admin'>Admin</a></li>
	  <li><a href='datalatih.php?mnu=datalatih'>Datalatih</a></li>
	  <li><a href='pengujian.php?mnu=pengujian'>Pengujian</a></li>
      <li><a href='index.php?mnu=logout'>Logout</a></li>";
}
else if($_SESSION["cstatus"]=="User"){	
      echo"
	  <li><a href='home1.php?mnu=home'>Home</a></li>
      <li><a href='user.php?mnu=profil'>Profil</a></li>
	  <li><a href='info1.php?mnu=info'>Info Penyakit</a></li>
	  <li><a href='pengujian.php?mnu=analisa'>Pengujian</a></li>
	  <li><a href='arsip.php?mnu=arsip'>Arsip</a></li>
      <li><a href='index.php?mnu=logout'>Logout</a></li>";
}
else{
	 
	 echo"<li><a href='index.php?mnu=login'>Login</a></li>";	 
	}
      ?>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	
		<div class="gtco-container">
			<div class="row">
				
			</div>
		</div>
	</header>
	<div id="gtco-features" class="border-bottom">
		<div class="gtco-container">
<?php
				
if($mnu=="admin"){require_once"admin/admin.php";}
else if($mnu=="datalatih"){require_once"datalatih/datalatih.php";}
else if($mnu=="pengujian"){require_once"pengujian/pengujian.php";}
else if($mnu=="user"){require_once"user/user.php";}
			
			else if($mnu=="profil"){require_once"user/profil.php";}
			
			else if($mnu=="arsip"){require_once"pengujian/arsip.php";}
			else if($mnu=="info"){require_once"info1.php";}
			
else if($mnu=="login"){require_once"login.php";}
else if($mnu=="logout"){require_once"logout.php";}
else if($mnu=="analisa"){require_once"tanya1.php";}

else {require_once"home.php";}
				
 ?>
		</div>
	</div>
	
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

<?php function RP($rupiah){return number_format($rupiah,"2",",",".");}?>
<?php
function WKT($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,0,4);

$judul_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei","Juni", "Juli", "Agustus", "September","Oktober", "November", "Desember");
$wk=$tanggal." ".$judul_bln[(int)$bulan]." ".$tahun;
return $wk;
}
?>
<?php
function WKTP($sekarang){
$tanggal = substr($sekarang,8,2)+0;
$bulan = substr($sekarang,5,2);
$tahun = substr($sekarang,2,2);

$judul_bln=array(1=> "Jan", "Feb", "Mar", "Apr", "Mei","Jun", "Jul", "Agu", "Sep","Okt", "Nov", "Des");
$wk=$tanggal." ".$judul_bln[(int)$bulan]."'".$tahun;
return $wk;
}
?>
<?php
function BAL($tanggal){
	$arr=split(" ",$tanggal);
	if($arr[1]=="Januari"){$bul="01";}
	else if($arr[1]=="Februari"){$bul="02";}
	else if($arr[1]=="Maret"){$bul="03";}
	else if($arr[1]=="April"){$bul="04";}
	else if($arr[1]=="Mei"){$bul="05";}
	else if($arr[1]=="Juni"){$bul="06";}
	else if($arr[1]=="Juli"){$bul="07";}
	else if($arr[1]=="Agustus"){$bul="08";}
	else if($arr[1]=="September"){$bul="09";}
	else if($arr[1]=="Oktober"){$bul="10";}
	else if($arr[1]=="November"){$bul="11";}
	else if($arr[1]=="Nopember"){$bul="11";}
	else if($arr[1]=="Desember"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
}
?>

<?php
function BALP($tanggal){
	$arr=split(" ",$tanggal);
	if($arr[1]=="Jan"){$bul="01";}
	else if($arr[1]=="Feb"){$bul="02";}
	else if($arr[1]=="Mar"){$bul="03";}
	else if($arr[1]=="Apr"){$bul="04";}
	else if($arr[1]=="Mei"){$bul="05";}
	else if($arr[1]=="Jun"){$bul="06";}
	else if($arr[1]=="Jul"){$bul="07";}
	else if($arr[1]=="Agu"){$bul="08";}
	else if($arr[1]=="Sep"){$bul="09";}
	else if($arr[1]=="Okt"){$bul="10";}
	else if($arr[1]=="Nov"){$bul="11";}
	else if($arr[1]=="Nop"){$bul="11";}
	else if($arr[1]=="Des"){$bul="12";}
return "$arr[2]-$bul-$arr[0]";	
}
?>


<?php
function process($conn,$sql){
$s=false;
$conn->autocommit(FALSE);
try {
  $rs = $conn->query($sql);
  if($rs){
	    $conn->commit();
	    $last_inserted_id = $conn->insert_id;
 		$affected_rows = $conn->affected_rows;
  		$s=true;
  }
} 
catch (Exception $e) {
	echo 'fail: ' . $e->getMessage();
  	$conn->rollback();
}
$conn->autocommit(TRUE);
return $s;
}

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getField($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$d= $rs->fetch_assoc();
	$rs->free();
	return $d;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	//foreach($arr as $row) {
	//  echo $row['nama_kelas'] . '*<br>';
	//}
	
	$rs->free();
	return $arr;
}

function getAdmin($conn,$kode){
$field="username";
$sql="SELECT `$field` FROM `tb_admin` where `kode_admin`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
	
	
function getUser($conn,$kode){
$field="nama_user";
$sql="SELECT `$field` FROM `tb_user` where `id_user`='$kode'";
$rs=$conn->query($sql);	
	$rs->data_seek(0);
	$row = $rs->fetch_assoc();
	$rs->free();
    return $row[$field];
	}
?>