
		<?php  
$m=1;
  $sqld="select distinct(kategori) from `$tbpengujian` where id_user='".$_SESSION["cid"]."' order by `id_user` desc";
  				$m=3;				
				 $jume=getJum($conn,$sqld);
		if($jume <1){
			echo"<h1>Maaf data pengujian belum tersedia</h1>";
		}
	$arrd=getData($conn,$sqld);
		foreach($arrd as $dd) {				
				$kategori=$dd["kategori"];
			
	$m++;
			?>

  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $m;?>">
        <font color="#0000FF"> Hasil Pengujian <?php echo $kategori;?></font></a>
      </h4>
    </div>
  <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
		  
<!-----ACCORDION----->
<br />


<table width="568" border="0" class="table table-striped table-bordered table-hover">
  <tr bgcolor="#036">
    <th width="4%"><center>No</center></th>
	  <th width="18%"><center>Waktu</center></th>
    <th width="78%"><center>Hasil Diagnosa</center></th>  
  </tr>
<?php  
  $sql="select * from `$tbpengujian`  where `kategori`='$kategori' and  id_user='".$_SESSION["cid"]."' order by `id_pengujian` desc";
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
				<td>$tanggal, $jam wib</td>
				<td>
				<table>
				<tr>
					<td>Apakah Anda Sering Buang Air Kecil(Poliuria) ?</td>
					<td>:</td>
					<td>$gejala_1</td>
				</tr>
				<tr>
					<td>Apakah Anda Mengalami Berat Badan Turun Cepat ?</td>
					<td>:</td>
					<td>$gejala_2</td>
				</tr>
				<tr>
					<td>Apakah Anda Mengalami Air Seni Dikerubuti Semut ?</td>
					<td>:</td>
					<td>$gejala_3</td>
				</tr>
				<tr>
					<td>Apakah Anda Sering Merasa Haus, Banyak Minum(Polidipsia) ?</td>
					<td>:</td>
					<td>$gejala_4</td>
				</tr>
				<tr>
					<td>Apakah Anda Sering Merasa Lapar, Banyak Makan(Polifagia) ?</td>
					<td>:</td>
					<td>$gejala_5</td>
				</tr>
				<tr>
					<td>Apakah Anda Sering Kesemutan Pada Malam Hari ?</td>
					<td>:</td>
					<td>$gejala_6</td>
				</tr>
				<tr>
					<td>Apakah Anda Mengalami Luka Luar yang Lama Sembuh ?</td>
					<td>:</td>
					<td>$gejala_7</td>
				</tr>
				<tr>
					<td>Apakah Anda Mengalami Infeksi Kulit yang Berulang ?</td>
					<td>:</td>
					<td>$gejala_8</td>
				<tr>
					<td><strong>Anda terdiagnosa Mengalami penyakit</td>
					<td>:</strong></td>
					<td>$kategori</td>
					
					<td align='center'>
				</tr>
				</table>";
			
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
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$prev&mnu=arsip'>« Prev</a></span> ";
	}
	else{echo "<span class=disabled>« Prev</span> ";}

	// Tampilkan link page 1,2,3 ...
	for($i=1;$i<=$jmlhal;$i++)
	if ($i != $page){echo "<a href='$_SERVER[PHP_SELF]?page=$i&mnu=arsip'>$i</a> ";}
	else{echo " <span class=current>$i</span> ";}

	// Link kepage berikutnya (Next)
	if($page < $jmlhal){
		$next=$page+1;
		echo "<span class=prevnext><a href='$_SERVER[PHP_SELF]?page=$next&mnu=arsip'>Next »</a></span>";
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
		  <?php
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