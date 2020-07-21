<?php
session_start();
require_once"konmysqli.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="imagesl/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorl/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsl/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontsl/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorl/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorl/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorl/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorl/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorl/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="cssl/util.css">
	<link rel="stylesheet" type="text/css" href="cssl/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(bg/hospital-15.jpg);">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title p-b-33">
						Forgot Account
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="user" placeholder="Username" id="user">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Email is required">
						<input class="input100" type="email" name="email" placeholder="Email" id="email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="Request" id="Request">
							Request Account
						</button>
					</div>
					


					<div class="text-center">
						<span class="txt1">
							
						</span>

						<a href="login.php" class="txt2 hov1">
						Login Now 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendorl/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/bootstrap/js/popper.js"></script>
	<script src="vendorl/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/daterangepicker/moment.min.js"></script>
	<script src="vendorl/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorl/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jsl/main.js"></script>

</body>
</html>

<?php
if(isset($_POST["Request"])){
	$usr=$_POST["user"];
	$email=$_POST["email"];
	
		$sql1="select * from `$tbuser` where `username`='$usr' and `email`='$email' and `status`='Aktif'";
		
		if(getJum($conn,$sql1)>0){
			$d=getField($conn,$sql1);
				$kode=$d["id_user"];
				$nama=$d["nama_user"];
				$username=$d["username"];
				$password=$d["password"];
				
				  // $_SESSION["cid"]=$kode;
				  // $_SESSION["cnama"]=$nama;
				  // $_SESSION["cstatus"]="User";
		echo "<script>alert('Yth $nama, Gunakan Account $username dan Password $password untuk  Login!');
		document.location.href='login.php?mnu=home';</script>";
		}
	
		else{
			session_destroy();
			echo "<script>alert('Otentikasi Login GAGAL !,Silakan cek data Anda kembali...');
			document.location.href='forget.php?mnu=login';</script>";
		}
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