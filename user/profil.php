
<?php

	$id_user=$_SESSION["cid"];
	$sql="select * from `$tbuser` where `id_user`='$id_user'";
	$d=getField($conn,$sql);
				$id_user=$d["id_user"];
				$id_user0=$d["id_user"];
				$username=$d["username"];
				$nama_user=$d["nama_user"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=WKT($d["tgl_lahir"]);
				$password=$d["password"];
				$status=$d["status"];
				$email=$d["email"];
				$keterangan=$d["keterangan"];

?>

<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Update Profile User</h3>
					<form action="#" method="post">
					
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="username">Username</label>
								<input type="text" value=<?php echo $username?> name="username"  id="username" class="form-control"  placeholder="Username">
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="name">Name</label>
								<input type="text" value=<?php echo $nama_user;?> name="nama_user" id="name" class="form-control" placeholder="Nama User">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input type="text" name="email" value=<?php echo $email?> id="email" class="form-control" placeholder="Email User">
							</div>
						</div>
 
					
						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="passwordbaru">Password Baru</label>
								<input type="text" value=<?php echo $password?>  name="password"  id="password"  class="form-control" placeholder="Password Baru">
							</div>
						</div>
						
						
						
 <tr>
    <td colspan="3"><hr color="#AAAAAA"></td>
    
  </tr>
					
						<div class="form-group">
							<input type="submit" value="Update Profil" name="UPDATE" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					


				</div>
				</div>



<?php
if(isset($_POST["UPDATE"])){
	$id_user0=strip_tags($_SESSION["cid"]);
	$nama_user=strip_tags($_POST["nama_user"]);
//	$jenis_kelamin=strip_tags($_POST["jenis_kelamin"]);
	//$tgl_lahir=BAL(strip_tags($_POST["tgl_lahir"]));
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$keterangan=strip_tags($_POST["keterangan"]);
 	$email=strip_tags($_POST["email"]);

$sql="update `$tbuser` set 
`nama_user`='$nama_user',
`username`='$username',
`password`='$password',
`email`='$email'
where `id_user`='$id_user0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_user berhasil diubah !');document.location.href='?mnu=profil';</script>";}
	else{echo"<script>alert('Data $id_user gagal diubah...');document.location.href='?mnu=profil';</script>";}
	
}
?>
