<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbuser`";
if(getJum($conn,$sql)>0){
	print "<user>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=$d["tgl_lahir"];
				$username=$d["username"];
			    $password=$d["password"];
				$status=$d["status"];
				$email=$d["email"];
				$keterangan=$d["keterangan"];
												
				print "<record>\n";
				print "  <nama_user>$nama_user</nama_user>\n";
				print "  <jenis_kelamin>$jenis_kelamin</jenis_kelamin>\n";
				print "  <tgl_lahir>$tgl_lahir</tgl_lahir>\n";
				print "  <username>$username</username>\n";
				print "  <password>$password</password>\n";
				print "  <status>$status</status>\n";
				print "  <email>$email</email>\n";
				print "  <keterangan>$keterangan</keterangan>\n";
				print "  <id_user>$id_user</id_user>\n";
				print "</record>\n";
			}
	print "</user>\n";
}
else{
	$null="null";
	print "<user>\n";
		print "<record>\n";
				print "  <nama_user>$null</nama_user>\n";
				print "  <jenis_kelamin>$null</jenis_kelamin>\n";
				print "  <tgl_lahir>$null</tgl_lahir>\n";
				print "  <username>$null</username>\n";
				print "  <password>$null</password>\n";
				print "  <status>$null</status>\n";
				print "  <email>$null</email>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_user>$null</id_user>\n";
		print "</record>\n";
	print "</user>\n";
	}
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function getJum($conn,$sql){
  $rs=$conn->query($sql);
  $jum= $rs->num_rows;
	$rs->free();
	return $jum;
}

function getData($conn,$sql){
	$rs=$conn->query($sql);
	$rs->data_seek(0);
	$arr = $rs->fetch_all(MYSQLI_ASSOC);
	
	$rs->free();
	return $arr;
}
?>
	