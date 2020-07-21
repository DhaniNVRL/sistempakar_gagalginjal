<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "../konmysqli.php";
echo"<link href='../ypathcss/$css' rel='stylesheet' type='text/css' />";
?>


<h3><center>Laporan data pengujian:</h3>
 

<table width="100%" border="0">
  <tr>
    <th width="5%"><center>no</td>
    <th width="10%"><center>id_pengujian</td>
	<th width="5%"><center>tanggal</td>
    <th width="5%"><center>jam</td>
    <th width="5%"><center>id_user</td>
    <th width="25%"><center>gejala_1</td>
    <th width="25%"><center>gejala_2</td>
    <th width="20%"><center>gejala_3</td>
    <th width="10%"><center>gejala_4</td>
    <th width="5%"><center>gejala_5</td>
    <th width="25%"><center>gejala_6</td>
    <th width="25%"><center>gejala_7</td>
    <th width="20%"><center>gejala_8</td>
    <th width="5%"><center>kategori</td>
    <th width="5%"><center>rekapitulasi</td>
    <th width="5%"><center>keterangan</td>
  </tr>
<?php  
  $sql="select * from `$tbpengujian` order by `id_pengujian` desc";
  $jum=getJum($conn,$sql);
  $no=0;
		if($jum > 0){
	$arr=getData($conn,$sql);
		foreach($arr as $d) {								
		$no++;
				$id_pengujian=$d["id_pengujian"];
				$tanggal=$d["tanggal"];
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
						
if($no %2==1){
echo"<tr bgcolor='#999999'>
				<td>$no</td>
				<td>$id_pengujian</td>
				<td>$tanggal</td>
				<td>$jam</td>
				<td>$id_user</td>
				<td>$gejala_1</td>
				<td>$gejala_2</td>
				<td>$gejala_3</td>
				<td>$gejala_4</td>
				<td>$gejala_5</td>
				<td>$gejala_6</td>
				<td>$gejala_7</td>
				<td>$gejala_8</td>
				<td>$kategori</td>
				<td>$rekapitulasi</td>
				<td>$keterangan</td>
				</tr>";
				}//no==1
else if($no %2==0){
echo"<tr bgcolor='#cccccc'>
				<td>$no</td>
				<td>$id_pengujian</td>
				<td>$tanggal</td>
				<td>$jam</td>
				<td>$id_user</td>
				<td>$gejala_1</td>
				<td>$gejala_2</td>
				<td>$gejala_3</td>
				<td>$gejala_4</td>
				<td>$gejala_5</td>
				<td>$gejala_6</td>
				<td>$gejala_7</td>
				<td>$gejala_8</td>
				<td>$kategori</td>
				<td>$rekapitulasi</td>
				<td>$keterangan</td>
				</tr>";
				}
			}//while
		}//if
		else{echo"<tr><td colspan='7'><blink>Maaf, Data pengujian belum tersedia...</blink></td></tr>";}
		
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

</table>

