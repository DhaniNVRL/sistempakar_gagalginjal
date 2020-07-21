<?php
$pro="simpan";
$tgl_lahir=WKT(date("Y-m-d"));
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl_lahir").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('user/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, telepon=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
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
?>

<?php
if($_GET["pro"]=="ubah"){
	$id_user=$_GET["kode"];
	$sql="select * from `$tbuser` where `id_user`='$id_user'";
	$d=getField($conn,$sql);
				$id_user=$d["id_user"];
				$id_user0=$d["id_user"];
				$nama_user=$d["nama_user"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=WKT($d["tgl_lahir"]);
				$username=$d["username"];
				$password=$d["password"];
				$status=$d["status"];
				$email=$d["email"];
				$keterangan=$d["keterangan"];
				$pro="ubah";		
}
?>
<!-----ACCORDION----->
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <font color="#0000FF">Input Data User</font></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
<!-----ACCORDION----->
<form action="" method="post" enctype="multipart/form-data">
<table width="545" border="0" class="table table-striped table-bordered table-hover">


<tr>
<th width="129"><label for="id_user">ID User</label>
<th width="10" valign="top">:
<th width="391" colspan="2"><b><?php echo $id_user;?></b>
</tr>

<tr>
<td><label for="nama_user">Nama User</label>
<td valign="top">:
<td colspan="2"><input name="nama_user" type="text" id="nama_user" value="<?php echo $nama_user;?>" size="30" /></td>
</tr>

<tr>
<td><label for="jenis_kelamin">jenis_kelamin</label>
<td valign="top">:<td colspan="2">
<input type="radio" name="jenis_kelamin" id="jenis_kelamin"  checked="checked" value="Laki-Laki" <?php if($jenis_kelamin=="Laki-Laki"){echo"checked";}?>/>Laki-Laki 
<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" <?php if($jenis_kelamin=="Perempuan"){echo"checked";}?>/>Perempuan
</td></tr>

<tr>
<td height="24"><label for="tgl_lahir">Tanggal Lahir</label>
<td valign="top">:
<td><input name="tgl_lahir" type="date" id="tgl_lahir" value="<?php echo $tgl_lahir;?>" size="15" />
</tr>

<tr>
<td><label for="username">Username</label>
<td valign="top">:<td colspan="2"><input name="username" type="text" id="username" value="<?php echo $username;?>" size="30" /></td></tr>

<tr>
<td><label for="password">Password</label>
<td valign="top">:<td colspan="2"><input name="password" type="text" id="password" value="<?php echo $password;?>" size="30" /></td></tr>

<tr>
<td><label for="status">Status</label>
<td valign="top">:<td colspan="2">
<input type="radio" name="status" id="status"  checked="checked" value="Aktif" <?php if($status=="Aktif"){echo"checked";}?>/>Aktif 
<input type="radio" name="status" id="status" value="Tidak Aktif" <?php if($status=="Tidak Aktif"){echo"checked";}?>/>Tidak Aktif
</td></tr>
	
<tr>
<td><label for="email">Email</label>
<td valign="top">:<td colspan="2"><input name="email" type="text" id="email" value="<?php echo $email;?>" size="30" /></td></tr>	
	
<tr>
<td><label for="keterangan">Keterangan</label>
<td valign="top">:<td colspan="2"><input name="keterangan" type="text" id="keterangan" value="<?php echo $keterangan;?>" size="30" /></td></tr>	


<tr>
<td>
<td valign="top">
<td colspan="2">	<input class="btn" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_user" type="hidden" id="id_user" value="<?php echo $id_user;?>" />
        <input name="id_user0" type="hidden" id="id_user0" value="<?php echo $id_user0;?>" />
        <a href="?mnu=user"><input class="btn" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
		  <!-----ACCORDION----->
</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <font color="#0000FF">Lihat Data User</font></a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
<!-----ACCORDION----->
<br />
Data user: 
| <a href="user/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="user/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <a href="user/xml.php"><img src='ypathicon/xml.png' alt='XML'></a> 
| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
<br>

<table width="100%" border="0" class="table table-striped table-bordered table-hover">
  <tr bgcolor="#036">
	<th width="2%"><center>No</center></th>
    <th width="7%"><center>Kode</center></th>
    <th width="15%"><center>Nama User</center></th>
    <th width="10%"><center>Jenis kelamin</center></th>
    <th width="13%"><center>Tgl Lahir</center></th>
    <th width="10%"><center>Username</center></th>
    <th width="9%"><center>Password</center></th>
    <th width="7%"><center>Status</center></th>
	 <th width="7%"><center>Email</center></th>
	<th width="8%"><center>keterangan</center></th>
    <th width="12%"><center>Menu</center></th>
  </tr>
<?php  
  $sql="select * from `$tbuser` order by `id_user` desc";
  $jum=getJum($conn,$sql);
		if($jum > 0){
	//--------------------------------------------------------------------------------------------
	$batas   = 10;
	$page = $_GET['page'];
	if(empty($page)){$posawal  = 0;$page = 1;}
	else{$posawal = ($page-1) * $batas;}
	
	$sql2 = $sql." LIMIT $posawal,$batas";
	$no = $posawal+1;
	//--------------------------------------------------------------------------------------------									
	$arr=getData($conn,$sql2);
		foreach($arr as $d) {							
				$id_user=$d["id_user"];
				$nama_user=$d["nama_user"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=WKT($d["tgl_lahir"]);
				$username=$d["username"];
				$password=$d["password"];
				$status=$d["status"];
				$email=$d["email"];
				$keterangan=$d["keterangan"];
					$color="#dddddd";	
					if($no %2==0){$color="#eeeeee";}
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td>$id_user</td>
				<td>$nama_user</td>
				<td>$jenis_kelamin</td>
				<td>$tgl_lahir</td>
				<td>$username</td>
				<td>$password</td>
				<td>$status</td>
				<td>$email</td>
				<td>$keterangan</td>
				<td align='center'>
<a href='?mnu=user&pro=ubah&kode=$id_user'><img src='ypathicon/u.png' alt='ubah'></a>
<a href='?mnu=user&pro=hapus&kode=$id_user'><img src='ypathicon/h.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $nama_user pada data user ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data user belum tersedia...</blink></td></tr>";}
?>
</table>

<?php
//Langkah 3: Hitung total data dan page 
$jmldata = $jum;
if($jmldata>0){
	if($batas<1){$batas=1;}
	$jmlhal  = ceil($jmldata/$batas);
	echo "<div class=paging>";
	if($page > 1){
		$prev=$page-1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=user'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=user'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=user'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-----ACCORDION----->
</div>
    </div>
  </div>
</div>
<!-----ACCORDION----->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_user=strip_tags($_POST["id_user"]);
	$id_user0=strip_tags($_POST["id_user0"]);
	$nama_user=strip_tags($_POST["nama_user"]);
	$jenis_kelamin=strip_tags($_POST["jenis_kelamin"]);
	$tgl_lahir=BAL(strip_tags($_POST["tgl_lahir"]));
	$username=strip_tags($_POST["username"]);
	$password=strip_tags($_POST["password"]);
	$status=strip_tags($_POST["status"]);
	$email=strip_tags($_POST["email"]);
	$keterangan=strip_tags($_POST["keterangan"]);

	
if($pro=="simpan"){
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
		if($simpan) {echo "<script>alert('Data $id_user berhasil disimpan !');document.location.href='?mnu=user';</script>";}
		else{echo"<script>alert('Data $id_user gagal disimpan...');document.location.href='?mnu=user';</script>";}
	}
	else{
$sql="update `$tbuser` set 
`nama_user`='$nama_user',
`jenis_kelamin`='$jenis_kelamin' ,
`tgl_lahir`='$tgl_lahir',
`username`='$username',
`password`='$password',
`status`='$status',
`email`='$email',
`keterangan`='$keterangan' 
where `id_user`='$id_user0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_user berhasil diubah !');document.location.href='?mnu=user';</script>";}
	else{echo"<script>alert('Data $id_user gagal diubah...');document.location.href='?mnu=user';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_user=$_GET["kode"];
$sql="delete from `$tbuser` where `id_user`='$id_user'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data user $id_user berhasil dihapus !');document.location.href='?mnu=user';</script>";}
else{echo"<script>alert('Data user $id_user gagal dihapus...');document.location.href='?mnu=user';</script>";}
}
?>

