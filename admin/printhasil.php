<style type="text/css">body {width: 100%;} </style> 
<body OnLoad="window.print()" OnFocus="window.close()"> 
<?php
include "konmysqli.php";
echo"<link href='ypathcss/$css' rel='stylesheet' type='text/css' />";
?>

<h3><center><strong>Laporan Hasil:</strong></h3>
<h2>Yth Anda terdiagnosa : <?php echo $kategori;?></h2>
<p><?php echo $keterangan;?></p>
<p>Pengobatan : <?php echo $solusi;?>
<p>Saran : <?php echo $saran;?>
 

<?php

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

