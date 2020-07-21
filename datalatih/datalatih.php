<?php
$pro="simpan";
$tgl=WKT(date("Y-m-d"));
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tgl").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('datalatih/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, gejala_5=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_datalatih=$_GET["kode"];
	$sql="select * from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
	$d=getField($conn,$sql);
				$id_datalatih=$d["id_datalatih"];
				$id_datalatih0=$d["id_datalatih"];
				$gejala_1=$d["gejala_1"];
				$gejala_2=$d["gejala_2"];
				$gejala_3=$d["gejala_3"];
				$gejala_4=$d["gejala_4"];
				$gejala_5=$d["gejala_5"];
				$gejala_6=$d["gejala_6"];
				$gejala_7=$d["gejala_7"];
				$gejala_8=$d["gejala_8"];
				$kategori=$d["kategori"];
				$pro="ubah";		
}
?>
<!-----ACCORDION----->
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <font color="#0000FF">Input Data Latih</font></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
<!-----ACCORDION----->
<form action="" method="post" enctype="multipart/form-data">
<table width="616" border="0" class="table table-striped table-bordered table-hover">

<tr>
<td><label for="gejala_1">Apakah Anda Sering Berkemih(Poliuria) ?</label>
<td valign="top">:
<td colspan="2">
	
<input type="radio" name="gejala_1" id="gejala_1"  checked="checked" value="Ya" <?php if($gejala_1=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_1" id="gejala_1" value="Tidak" <?php if($gejala_1=="Tidak"){echo"checked";}?>/>Tidak
</td></tr>

<tr>
<td><label for="gejala_2">Apakah Anda Mengalami Berat Badan Turun Cepat ?</label>
<td valign="top">:
<td colspan="2">
	
<input type="radio" name="gejala_2" id="gejala_2"  checked="checked" value="Ya" <?php if($gejala_2=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_2" id="gejala_2" value="Tidak" <?php if($gejala_2=="Tidak"){echo"checked";}?>/>Tidak
</td></tr>

<tr>
<td height="24"><label for="gejala_3">Apakah Anda Mengalami Air Seni Dikerubuti Semut ?</label>
<td valign="top">:
<td colspan="2">
	
<input type="radio" name="gejala_3" id="gejala_3"  checked="checked" value="Ya" <?php if($gejala_3=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_3" id="gejala_3" value="Tidak" <?php if($gejala_3=="Tidak"){echo"checked";}?>/>Tidak
</td></tr>

<tr>
<td height="24"><label for="gejala_4">Apakah Anda Sering Merasa Haus, Banyak Minum(Polidipsia) ?</label>
<td valign="top">:
<td colspan="2">
	
<input type="radio" name="gejala_4" id="gejala_4"  checked="checked" value="Ya" <?php if($gejala_4=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_4" id="gejala_4" value="Tidak" <?php if($gejala_4=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_5">Apakah Anda Sering Merasa Lapar, Banyak Makan(Polifagia) ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_5" id="gejala_5"  checked="checked" value="Ya" <?php if($gejala_5=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_5" id="gejala_5" value="Tidak" <?php if($gejala_5=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_6">Apakah Anda Sering Kesemutan Pada Malam Hari ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_6" id="gejala_6"  checked="checked" value="Ya" <?php if($gejala_6=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_6" id="gejala_6" value="Tidak" <?php if($gejala_6=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_7">Apakah Anda Mengalami Luka Luar yang Lama Sembuh ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_7" id="gejala_7"  checked="checked" value="Ya" <?php if($gejala_7=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_7" id="gejala_7" value="Tidak" <?php if($gejala_7=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_8">Apakah Anda Mengalami Infeksi Kulit yang Berulang ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_8" id="gejala_8"  checked="checked" value="Ya" <?php if($gejala_8=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_8" idate()id="gejala_8" value="Tidak" <?php if($gejala_8=="Tidak"){echo"checked";}?>/>Tidak</td></tr>



<tr>
<td><label for="kategori">Kategori</label>
<td valign="top">:<td colspan="2">
	<input type="radio" name="kategori" id="kategori"  checked="checked" value="Diabetes Tipe 1" <?php if($status=="Diabetes Tipe 1"){echo"checked";}?>/>Diabetes Tipe 1 <br>
<input type="radio" name="kategori" id="kategori" value="Diabetes Tipe 2" <?php if($kategori=="Diabetes Tipe 2"){echo"checked";}?>/>Diabetes Tipe 2
	</td></tr>

<tr>
<td>
<td valign="top">
<td colspan="2">	<input class="btn" name="Simpan" type="submit" id="Simpan" value="Simpan" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_datalatih" type="hidden" id="id_datalatih" value="<?php echo $id_datalatih;?>" />
        <input name="id_datalatih0" type="hidden" id="id_datalatih0" value="<?php echo $id_datalatih0;?>" />
        <a href="?mnu=datalatih"><input class="btn" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>
<!-----ACCORDION----->
</div>
    </div>
  </div>
	
	
<?php  
	$m=3;
  $sqlc="select distinct(kategori) from `$tbdatalatih` order by `id_datalatih` desc";
	$arrc=getData($conn,$sqlc);
		foreach($arrc as $dc) {							
				$kategori=$dc["kategori"];	
			$m++;
			?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $m;?>">
        <font color="#0000FF">Lihat Data Latih <?php echo $kategori;?></font></a>
      </h4>
    </div>
    <div id="collapse<?php echo $m;?>" class="panel-collapse collapse">
      <div class="panel-body">
<!-----ACCORDION----->
<br />
Data datalatih <?php echo $kategori;?>: 
| <a href="datalatih/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="datalatih/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <a href="datalatih/xml.php"><img src='ypathicon/xml.png' alt='XML'></a> 
| <img src='ypathicon/print.png' alt='PRINT' OnClick="PRINT()"> |
<br>

<table width="100%" border="0" class="table table-striped table-bordered table-hover">
  <tr bgcolor="#036">
    <th width="3%"><center>No</center></th>
    <th width="10%"><center>Gejala1</center></th>
	<th width="10%"><center>Gejala2</center></th>
	<th width="10%"><center>Gejala3</center></th>
	<th width="10%"><center>Gejala4</center></th>
	<th width="10%"><center>Gejala5</center></th>
	<th width="10%"><center>Gejala6</center></th>
	<th width="10%"><center>Gejala7</center></th>
	<th width="10%"><center>Gejala8</center></th>  
	<th width="4%"><center>Menu</th>
  </tr>
<?php  
  $sql="select * from `$tbdatalatih` where kategori='$kategori' order by `id_datalatih` desc";
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
				$id_datalatih=$d["id_datalatih"];
				$gejala_1=$d["gejala_1"];
				$gejala_2=$d["gejala_2"];
				$gejala_3=$d["gejala_3"];
				$gejala_4=$d["gejala_4"];
				$gejala_5=$d["gejala_5"];
				$gejala_6=$d["gejala_6"];
				$gejala_7=$d["gejala_7"];
				$gejala_8=$d["gejala_8"];
				$kategori=$d["kategori"];
					$color="#dddddd";	
					if($no %2==0){$color="#eeeeee";}
echo"<tr bgcolor='$color'>
				<td>$no</td>
				<td>$gejala_1</td>
				<td>$gejala_2</td>
				<td>$gejala_3</td>
				<td>$gejala_4</td>
				<td>$gejala_5</td>
				<td>$gejala_6</td>
				<td>$gejala_7</td>
				<td>$gejala_8</td>
				
				<td align='center'>
<a href='?mnu=datalatih&pro=ubah&kode=$id_datalatih'><img src='ypathicon/u.png' alt='ubah'></a>
<a href='?mnu=datalatih&pro=hapus&kode=$id_datalatih'><img src='ypathicon/h.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $gejala_1 pada data datalatih ?..\")'></a></td>
				</tr>";
			
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data datalatih belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=datalatih'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=datalatih'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=datalatih'>Next »</a></span>";
	}
	else{ echo "<span class=disabled>Next »</span>";}
	echo "</div>";
	}//if jmldata

$jmldata = $jum;
	echo "<p align=center>Total Data <b>$jmldata</b> Item</p>";
?>
<!-----ACCORDION----->
		  
		  
	<ol>
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 2: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)
		<li>Gejala 1: Sering Berkemih(Poliuria)	
	</ol>
</div>
    </div>
  </div>
	<?php
		}
	?>
</div>
<!-----ACCORDION----->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_datalatih=strip_tags($_POST["id_datalatih"]);
	$id_datalatih0=strip_tags($_POST["id_datalatih0"]);
	$gejala_1=strip_tags($_POST["gejala_1"]);
	$gejala_2=strip_tags($_POST["gejala_2"]);
	$gejala_3=strip_tags($_POST["gejala_3"]);
	$gejala_4=strip_tags($_POST["gejala_4"]);
	$gejala_5=strip_tags($_POST["gejala_5"]);
	$gejala_6=strip_tags($_POST["gejala_6"]);
	$gejala_7=strip_tags($_POST["gejala_7"]);
	$gejala_8=strip_tags($_POST["gejala_8"]);
	$kategori=strip_tags($_POST["kategori"]);
	
if($pro=="simpan"){
$sql=" INSERT INTO `$tbdatalatih` (
`id_datalatih` ,
`gejala_1` ,
`gejala_2` ,
`gejala_3` ,
`gejala_4` ,
`gejala_5`,
`gejala_6` ,
`gejala_7` ,
`gejala_8` ,
`kategori`
) VALUES (
'', 
'$gejala_1', 
'$gejala_2',
'$gejala_3',
'$gejala_4',
'$gejala_5',
'$gejala_6', 
'$gejala_7',
'$gejala_8',
'$kategori'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_datalatih berhasil disimpan !');document.location.href='?mnu=datalatih';</script>";}
		else{echo"<script>alert('Data $id_datalatih gagal disimpan...');document.location.href='?mnu=datalatih';</script>";}
	}
	else{
$sql="update `$tbdatalatih` set 
`gejala_1`='$gejala_1',
`gejala_2`='$gejala_2' ,
`gejala_3`='$gejala_3',
`gejala_5`='$gejala_5',
`gejala_4`='$gejala_4',
`gejala_6`='$gejala_6',
`gejala_7`='$gejala_7' ,
`gejala_8`='$gejala_8',
`kategori`='$kategori'
where `id_datalatih`='$id_datalatih0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_datalatih berhasil diubah !');document.location.href='?mnu=datalatih';</script>";}
	else{echo"<script>alert('Data $id_datalatih gagal diubah...');document.location.href='?mnu=datalatih';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_datalatih=$_GET["kode"];
$sql="delete from `$tbdatalatih` where `id_datalatih`='$id_datalatih'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data datalatih $id_datalatih berhasil dihapus !');document.location.href='?mnu=datalatih';</script>";}
else{echo"<script>alert('Data datalatih $id_datalatih gagal dihapus...');document.location.href='?mnu=datalatih';</script>";}
}
?>

