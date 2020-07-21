<?php
$pro="simpan";
$tanggal=WKT(date("Y-m-d"));
$jam=date("H:i:s");
?>
<link type="text/css" href="<?php echo "$PATH/base/";?>ui.all.css" rel="stylesheet" />   
<script type="text/javascript" src="<?php echo "$PATH/";?>jquery-1.3.2.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.core.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/ui.datepicker.js"></script>
<script type="text/javascript" src="<?php echo "$PATH/";?>ui/i18n/ui.datepicker-id.js"></script>
    
  <script type="text/javascript"> 
      $(document).ready(function(){
        $("#tanggal").datepicker({
					dateFormat  : "dd MM yy",        
          changeMonth : true,
          changeYear  : true					
        });
      });
    </script>  

<!--SINGLE PRINT-->
<script type="text/javascript"> 
function PRINTS(v){ 
//alert(v); 
win=window.open('pengujian/prints.php?v='+v,'win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, jenis_kelamin=0'); } 
</script>
<!--SINGLE PRINT-->    

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('pengujian/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, usia=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>	

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('pengujian/print.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, gejala_5=0'); } 
</script>
<script language="JavaScript">
function buka(url) {window.open(url, 'window_baru', 'width=800,height=600,left=320,top=100,resizable=1,scrollbars=1');}
</script>

<?php
if($_GET["pro"]=="ubah"){
	$id_pengujian=$_GET["kode"];
	$sql="select * from `$tbpengujian` where `id_pengujian`='$id_pengujian'";
	$d=getField($conn,$sql);
				$id_pengujian=$d["id_pengujian"];
				$id_pengujian0=$d["id_pengujian"];
				$tanggal=WKT($d["tanggal"]);
				$jam=$d["jam"];
				$id_user=$d["id_user"];
				$gejala_1=$d["gejala_1"];
				$gejala_2=$d["gejala_2"];
				$gejala_3=$d["gejala_3"];
				$gejala_4=$d["gejala_4"];
				$gejala_5=$d["gejala_5"];
				$gejala_6=$d["gejala_6"];
				$gejala_7=$d["gejala_7"];
				$gejala_8=$d["gejala_8"];
				$kategori=$d["kategori"];
				$rekapitulasi=$d["rekapitulasi"];
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
        <font color="#0000FF">Input Data Pengujian</font></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
<!-----ACCORDION----->
<form action="" method="post" enctype="multipart/form-data">
<table width="568" border="0" class="table table-striped table-bordered table-hover">



<tr>
<td><label for="id_user">Pilih User</label>
<td valign="top">:
<td colspan="2"><select name="id_user" id="id_user">
	  <option value="Select">Select</option>
	  <?php
	  $s="select * from `tb_user`";
	$q=getData($conn,$s);
		foreach($q as $d){							
				$id_user0=$d["id_user"];
				$nama_user=$d["nama_user"];
	echo"<option value='$id_user0' ";if($id_user0==$id_user){echo"selected";} echo">$id_user0 - $nama_user  </option>";
	}
	?>
  </select></td>
</tr>	
	//pertanyaan 1-8
<tr>
<td><label for="gejala_1">Apakah Anda Sering Mengalami Buang Air Kecil (Poliuria) ?</label>
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
<td valign="top">:<td colspan="2">
<input type="radio" name="gejala_5" id="gejala_5"  checked="checked" value="Ya" <?php if($gejala_5=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_5" id="gejala_5" value="Tidak" <?php if($gejala_5=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_6">Apakah Anda Sering Merasakan Kesemutan Atau Mati Rasa ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_6" id="gejala_6"  checked="checked" value="Ya" <?php if($gejala_6=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_6" id="gejala_6" value="Tidak" <?php if($gejala_6=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_7">Apakah Anda Sering Mengalami Luka yang Lama Sembuh ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_7" id="gejala_7"  checked="checked" value="Ya" <?php if($gejala_7=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_7" id="gejala_7" value="Tidak" <?php if($gejala_7=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

<tr>
<td><label for="gejala_8">Apakah Anda Mengalami Infeksi Kulit yang Berulang ?</label>
<td valign="top">:<td colspan="2"><input type="radio" name="gejala_8" id="gejala_8"  checked="checked" value="Ya" <?php if($gejala_8=="Ya"){echo"checked";}?>/>Ya 
<input type="radio" name="gejala_8" idate()id="gejala_8" value="Tidak" <?php if($gejala_8=="Tidak"){echo"checked";}?>/>Tidak</td></tr>


<tr>
<td>
<td valign="top">
<td colspan="2">	<input class="btn" name="Hitung" type="submit" id="Simpan" value="Hitung" />
        <input name="pro" type="hidden" id="pro" value="<?php echo $pro;?>" />
        <input name="id_pengujian" type="hidden" id="id_pengujian" value="<?php echo $id_pengujian;?>" />
        <input name="id_pengujian0" type="hidden" id="id_pengujian0" value="<?php echo $id_pengujian0;?>" />
        <a href="?mnu=pengujian"><input class="btn" name="Batal" type="button" id="Batal" value="Batal" /></a>
</td></tr>
</table>
</form>

//rumus naive bayes
<?php
if(isset($_POST["Hitung"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pengujian=strip_tags($_POST["id_pengujian"]);
	$id_pengujian0=strip_tags($_POST["id_pengujian0"]);
	$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	$id_user=strip_tags($_POST["id_user"]);
	$gejala_1=strip_tags($_POST["gejala_1"]);
	$gejala_2=strip_tags($_POST["gejala_2"]);
	$gejala_3=strip_tags($_POST["gejala_3"]);
	$gejala_4=strip_tags($_POST["gejala_4"]);
	$gejala_5=strip_tags($_POST["gejala_5"]);
	$gejala_6=strip_tags($_POST["gejala_6"]);
	$gejala_7=strip_tags($_POST["gejala_7"]);
	$gejala_8=strip_tags($_POST["gejala_8"]);
	
	$jumK1=getOut($conn,"Diabetes Tipe 1");
	$jumK2=getOut($conn,"Diabetes Tipe 2");
	$totK1=$jumK1+$jumK2;
	$totK2=$jumK1+$jumK2;
	
	
	$jumgejala1A=getKK($conn,'gejala_1',$gejala_1,"Diabetes Tipe 1");
	$jumgejala1B=getKK($conn,'gejala_1',$gejala_1,"Diabetes Tipe 2");
	
	$jumgejala2A=getKK($conn,'gejala_2',$gejala_2,"Diabetes Tipe 1");
	$jumgejala2B=getKK($conn,'gejala_2',$gejala_2,"Diabetes Tipe 2");
	
	$jumgejala3A=getKK($conn,'gejala_3',$gejala_3,"Diabetes Tipe 1");
	$jumgejala3B=getKK($conn,'gejala_3',$gejala_3,"Diabetes Tipe 2");
	
	$jumgejala4A=getKK($conn,'gejala_4',$gejala_4,"Diabetes Tipe 1");
	$jumgejala4B=getKK($conn,'gejala_4',$gejala_4,"Diabetes Tipe 2");
	
	$jumgejala5A=getKK($conn,'gejala_5',$gejala_5,"Diabetes Tipe 1");
	$jumgejala5B=getKK($conn,'gejala_5',$gejala_5,"Diabetes Tipe 2");
	
	$jumgejala6A=getKK($conn,'gejala_6',$gejala_6,"Diabetes Tipe 1");
	$jumgejala6B=getKK($conn,'gejala_6',$gejala_6,"Diabetes Tipe 2");
	
	$jumgejala7A=getKK($conn,'gejala_7',$gejala_7,"Diabetes Tipe 1");
	$jumgejala7B=getKK($conn,'gejala_7',$gejala_7,"Diabetes Tipe 2");
	
	$jumgejala8A=getKK($conn,'gejala_8',$gejala_8,"Diabetes Tipe 1");
	$jumgejala8B=getKK($conn,'gejala_8',$gejala_8,"Diabetes Tipe 2");
	

	
$HA=($jumK1/$totK1)*($jumgejala1A/$jumK1)*($jumgejala2A/$jumK1)*($jumgejala3A/$jumK1)*($jumgejala4A/$jumK1)*($jumgejala5A/$jumK1)*($jumgejala6A/$jumK1)*($jumgejala7A/$jumK1)*($jumgejala8A/$jumK1);
$HB=($jumK2/$totK2)*($jumgejala1B/$jumK2)*($jumgejala2B/$jumK2)*($jumgejala3B/$jumK2)*($jumgejala4B/$jumK2)*($jumgejala5B/$jumK2)*($jumgejala6B/$jumK2)*($jumgejala7B/$jumK2)*($jumgejala8B/$jumK2);

$SHA="($jumK1/$totK1)*($jumgejala1A/$jumK1)*($jumgejala2A/$jumK1)*($jumgejala3A/$jumK1)*($jumgejala4A/$jumK1)*($jumgejala5A/$jumK1)*($jumgejala6A/$jumK1)*($jumgejala7A/$jumK1)*($jumgejala8A/$jumK1)";
$SHB="($jumK2/$totK2)*($jumgejala1B/$jumK2)*($jumgejala2B/$jumK2)*($jumgejala3B/$jumK2)*($jumgejala4B/$jumK2)*($jumgejala5B/$jumK2)*($jumgejala6B/$jumK2))*($jumgejala7B/$jumK2)*($jumgejala8B/$jumK2)";	
	
$max=0;
$keterangan="";
$solusi="";
$saran="";
if($HA>=$HB){
	$max=$HA;
	$out="Diatebetes Tipe 1";
	$keterangan="Penyakit Diabetes yang bergantung pada insulin, dimana tubuh kekurangan hormon insulin. Dikenal dengan istilah Insulin Dependent Deiabetes Melitus(IDDM). Diabetes tipe ini muncul ketika Pankreas sebagai pabrik insulin tidak lagi dapat atau mampu memproduksi insulin. Akibatnya insulin tubuh kurang atau tidak ada sama sekali. Glukosa menumpuk dalam darah karena tidak lagi dapat diangkut ke dalam sel.";
	$solusi="Tindakan pengelolaan yang dilakukan : Menormalkan kadar glukosa, lemak, dan insulin di dalam darah serta memberikan pengobatan penyakit kronis lainnya. Langkah yang dilakukan terutama : Diet; Mengurangi kalori dan meningkatkan konsumsi vitamin. aktivitas fisik; olahraga teratur, pengelolaan glukosa dan meningkatkan kepekaan terhadap insulin, Obat-obat hipoglikemia oral : Sulfonylurea untuk merangsang pancreas menghasilkan insulin dan mengurangi resistensi terhadap insulin, Terapi insulin";
	$saran="Membiasakan diri sejak dini dengan pola hidup sehat";
	}
else if($HB>=$HA){
	$max=$HB;
	$out="Diabetes Tipe 2";
	$keterangan="Diabetes Melitus yang sering disebut dengan Non-Insulin Dependent Diabetes Melitus atau diabetes mellitus tanpa bergantung pada insulin. Penyebab penyakit diabetes tipe 2 ini adalah kurangnya insulin pada tubuh bukan karena pankreas yang tidak berfungsi dengan baik.";
	$solusi="Tindakan pengelolaan yang dilakukan : Menormalkan kadar glukosa, lemak, dan insulin di dalam darah serta memberikan pengobatan penyakit kronis lainnya. Langkah yang dilakukan terutama : Diet; Mengurangi kalori dan meningkatkan konsumsi vitamin. aktivitas fisik; olahraga teratur, pengelolaan glukosa dan meningkatkan kepekaan terhadap insulin, Obat-obat hipoglikemia oral : Sulfonylurea untuk merangsang pancreas menghasilkan insulin dan mengurangi resistensi terhadap insulin, Terapi insulin";
	$saran="Membiasakan diri sejak dini dengan pola hidup sehat";	
	}

echo "Diabetes Tipe 1 : $SHA =$HA<br>";
echo "Diabetes Tipe 2 : $SHB =$HB<br>";


$rekap="Diabetes Tipe 1 : $SHA =$HA<br>";
$rekap.="Diabetes Tipe 2 : $SHB =$HB<br>";
$rekap.="Bobot Tertinggi =$out ($max) <br>";
echo "Bobot Tertinggi =$out ($max) <br>";
	
$tanggal=date("Y-m-d");
$jam=date("H:i:s");
$kategori=$out;
$rekapitulasi=$rekap;	

 $sql=" INSERT INTO `$tbpengujian` (
`id_pengujian` ,
`tanggal` ,
`jam` ,
`id_user`,
`gejala_1` ,
`gejala_2` ,
`gejala_3` ,
`gejala_4`,
`gejala_5`,
`gejala_6`,
`gejala_7`,
`gejala_8`,
`kategori`,
`rekapitulasi`,
`keterangan` 
) VALUES (
'', 
'$tanggal', 
'$jam',
'$id_user',
'$gejala_1',
'$gejala_2',
'$gejala_3',
'$gejala_4',
'$gejala_5',
'$gejala_6',
'$gejala_7',
'$gejala_8',
'$kategori',
'$rekap',
'$keterangan'
)";
$simpan=process($conn,$sql);

}

?>
		  <!-----ACCORDION----->
</div>
    </div>
  </div>
	<?php  
  $sqld="select distinct(kategori) from `$tbpengujian` order by `id_pengujian` desc";
  				$m=3;				
	$arrd=getData($conn,$sqld);
		foreach($arrd as $dd) {				
				$kategori=$dd["kategori"];
	$m++;
			?>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $m;?>">
        <font color="#0000FF">Lihat Data Pengujian <?php echo $kategori;?></font></a>
      </h4>
    </div>
    <div id="collapse<?php echo $m;?>" class="panel-collapse collapse">
      <div class="panel-body">
<!-----ACCORDION----->
<br />
Data pengujian: 
| <a href="pengujian/pdf.php"><img src='ypathicon/pdf.png' alt='PDF'></a> 
| <a href="pengujian/xls.php"><img src='ypathicon/xls.png' alt='XLS'></a> 
| <a href="pengujian/xml.php"><img src='ypathicon/xml.png' alt='XML'></a> 
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
	<th width="5%"><center>Menu</center></th>
  </tr>
<?php  
  $sql="select * from `$tbpengujian`  where `kategori`='$kategori' order by `id_pengujian` desc";
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
				$id_pengujian=$d["id_pengujian"];
				$tanggal=WKT($d["tanggal"]);
				$jam=$d["jam"];
				$id_user=getUser($conn,$d["id_user"]);
				$gejala_1=$d["gejala_1"];
				$gejala_2=$d["gejala_2"];
				$gejala_3=$d["gejala_3"];
				$gejala_4=$d["gejala_4"];
				$gejala_5=$d["gejala_5"];
				$gejala_6=$d["gejala_6"];
				$gejala_7=$d["gejala_7"];
				$gejala_8=$d["gejala_8"];
				$kategori=$d["kategori"];
				$rekapitulasi=$d["rekapitulasi"];
				$keterangan=$d["keterangan"];
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
				<td colspan='2'>$gejala_8</td>
				</tr>";
			echo"<tr bgcolor='$color'>
				<td>#</td>
				<td colspan='8'>$keterangan ($tanggal, $jam wib)</td>
				<td align='center'>
<a href='?mnu=pengujian&pro=ubah&kode=$id_pengujian'><img src='ypathicon/u.png' alt='ubah'></a>
<a href='?mnu=pengujian&pro=hapus&kode=$id_pengujian'><img src='ypathicon/h.png' alt='hapus' 
onClick='return confirm(\"Apakah Anda benar-benar akan menghapus $tanggal pada data pengujian ?..\")'></a>
				</tr>";
			$no++;
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data pengujian belum tersedia...</blink></td></tr>";}
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=pengujian'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=pengujian'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=pengujian'>Next »</a></span>";
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
	<?php
		}
	?>
</div>
<!-----ACCORDION----->
<?php
if(isset($_POST["Simpan"])){
	$pro=strip_tags($_POST["pro"]);
	$id_pengujian=strip_tags($_POST["id_pengujian"]);
	$id_pengujian0=strip_tags($_POST["id_pengujian0"]);
	$tanggal=BAL(strip_tags($_POST["tanggal"]));
	$jam=strip_tags($_POST["jam"]);
	$id_user=strip_tags($_POST["id_user"]);
	$gejala_1=strip_tags($_POST["gejala_1"]);
	$gejala_2=strip_tags($_POST["gejala_2"]);
	$gejala_3=strip_tags($_POST["gejala_3"]);
	$gejala_4=strip_tags($_POST["gejala_4"]);
	$gejala_5=strip_tags($_POST["gejala_5"]);
	$gejala_6=strip_tags($_POST["gejala_6"]);
	$gejala_7=strip_tags($_POST["gejala_7"]);
	$gejala_8=strip_tags($_POST["gejala_8"]);
	$kategori=strip_tags($_POST["kategori"]);
	$rekapitulasi=strip_tags($_POST["rekapitulasi"]);
	$keterangan=strip_tags($_POST["keterangan"]);
	
if($pro=="simpan"){
$sql=" INSERT INTO `$tbpengujian` (
`id_pengujian` ,
`tanggal`,
`jam`,
`id_user`,
`gejala_1` ,
`gejala_2` ,
`gejala_3` ,
`gejala_4` ,
`gejala_5`,
`gejala_6` ,
`gejala_7` ,
`gejala_8` ,
`kategori`,
`rekapitulasi`,
`keterangan`
) VALUES (
'$id_pengujian',
'$tanggal',
'$jam',
'$id_user',
'$gejala_1', 
'$gejala_2',
'$gejala_3',
'$gejala_4',
'$gejala_5',
'$gejala_6', 
'$gejala_7',
'$gejala_8',
'$kategori',
'$rekapitulasi',
'$keterangan'
)";
	
$simpan=process($conn,$sql);
		if($simpan) {echo "<script>alert('Data $id_pengujian berhasil disimpan !');document.location.href='?mnu=pengujian';</script>";}
		else{echo"<script>alert('Data $id_pengujian gagal disimpan...');document.location.href='?mnu=pengujian';</script>";}
	}
	else{
$sql="update `$tbpengujian` set 
`tanggal`='$tanggal',
`jam`='$jam',
`id_user`='$id_user',
`gejala_1`='$gejala_1',
`gejala_2`='$gejala_2' ,
`gejala_3`='$gejala_3',
`gejala_5`='$gejala_5',
`gejala_4`='$gejala_4',
`gejala_6`='$gejala_6',
`gejala_7`='$gejala_7' ,
`gejala_8`='$gejala_8',
`kategori`='$kategori',
`rekapitulasi`='$rekapitulasi',
`keterangan`='$keterangan'
where `id_pengujian`='$id_pengujian0'";
$ubah=process($conn,$sql);
	if($ubah) {echo "<script>alert('Data $id_pengujian berhasil diubah !');document.location.href='?mnu=pengujian';</script>";}
	else{echo"<script>alert('Data $id_pengujian gagal diubah...');document.location.href='?mnu=pengujian';</script>";}
	}//else simpan
}
?>

<?php
if($_GET["pro"]=="hapus"){
$id_pengujian=$_GET["kode"];
$sql="delete from `$tbpengujian` where `id_pengujian`='$id_pengujian'";
$hapus=process($conn,$sql);
if($hapus) {echo "<script>alert('Data pengujian $id_pengujian berhasil dihapus !');document.location.href='?mnu=pengujian';</script>";}
else{echo"<script>alert('Data pengujian $id_pengujian gagal dihapus...');document.location.href='?mnu=pengujian';</script>";}
}

function getKK($conn, $kolom, $data, $kat){
	$sql = "select `kategori` from `tb_datalatih` where `$kolom` = '$data' and `kategori` = '$kat'";
	$jum = getJum ($conn, $sql);
	return $jum;
}

function getOut($conn, $kat){
	$sql = "select `kategori` from `tb_datalatih` where `kategori` = '$kat'";
	$jum = getJum ($conn, $sql);
	return $jum;
	 
}
?>

