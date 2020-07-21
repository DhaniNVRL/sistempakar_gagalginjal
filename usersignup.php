<?php
session_start();
require_once"konmysqli.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register Forms User</title>

    <!-- Icons font CSS-->
    <link href="vendora/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendora/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendora/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendora/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cssa/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02" style="background-image: url(bg/hospital-15.jpg);">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
						   <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Birthday</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="birthday">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" value="Laki-laki" checked="checked" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" value="Perempuan" name="gender">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Note</label>
                                    <input class="input--style-4" type="text" name="keterangan">
                                </div>
                            </div>
                        </div>
                   
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="Registrasi" type="submit">Registrasi Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendora/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendora/select2/select2.min.js"></script>
    <script src="vendora/datepicker/moment.min.js"></script>
    <script src="vendora/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jsa/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<?php 
if(isset($_POST["Registrasi"])){
		$nama_user=strip_tags($_POST["first_name"])." ".strip_tags($_POST["last_name"]);
	$jenis_kelamin=strip_tags($_POST["gender"]);
	$tgl_lahir=(strip_tags($_POST["birthday"]));
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$status="Aktif";
	$email=strip_tags($_POST["email"]);
	$keterangan=strip_tags($_POST["keterangan"]);

	
	  $sql="select `id_user` from `$tbuser` order by `id_user` desc";
$q=mysqli_query($conn, $sql);
  $jum=mysqli_num_rows($q);
  $th=date("y");
  $bl=date("m")+0;if($bl<10){$bl="0".$bl;}

  $kd="USR".$th.$bl;//KEG1610001
  if($jum > 0){
   $d=mysqli_fetch_array($q);
   $idmax=$d["id_user"];
   
   $bul=substr($idmax,5,2);
   $tah=substr($idmax,3,2);
    if($bul==$bl && $tah==$th){
     $urut=substr($idmax,7,3)+1;
     if($urut<10){$idmax="$kd"."00".$urut;}
     else if($urut<100){$idmax="$kd"."0".$urut;}
     else{$idmax="$kd".$urut;}
    }//==
    else{
     $idmax="$kd"."001";
     }   
   }//jum>0
  else{$idmax="$kd"."001";}
  $id_user=$idmax;
  
$sql=" INSERT INTO `$tbuser` (
`id_user` ,
`nama_user` ,
`jenis_kelamin` ,
`tgl_lahir` ,
`username` ,
`password` ,
`status`,
`email` ,
`keterangan` 
) VALUES (
'$id_user', 
'$nama_user', 
'$jenis_kelamin',
'$tgl_lahir',
'$username',
'$password',
'$status',
'$email', 
'$keterangan'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_user berhasil Registrasi !');document.location.href='login.php';</script>";}
		else{echo"<script>alert('Data $id_user gagal Registrasi...');document.location.href='login.php';</script>";}

}




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
?>