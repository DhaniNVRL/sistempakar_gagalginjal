<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbpengujian`";
if(getJum($conn,$sql)>0){
	print "<pengujian>\n";
		$arr=getData($conn,$sql);
		foreach($arr as $d) {		
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
			    $gejala_9=$d["gejala_9"];
				$gejala_10=$d["gejala_10"];
				$kategori=$d["kategori"];
				$rekapitulasi=$d["rekapitulasi"];
			    $keterangan=$d["keterangan"];
												
				print "<record>\n";
				print "  <jam>$tanggal</tanggal>\n";
				print "  <id_user>$jam</jam>\n";
				print "  <add4>$id_user</id_user>\n";
				print "  <gejala_1>$gejala_1</gejala_1>\n";
				print "  <gejala_2>$gejala_2</gejala_2>\n";
				print "  <gejala_3>$gejala_3</gejala_3>\n";
				print "  <gejala_4>$gejala_4</gejala_4>\n";
				print "  <gejala_5>$gejala_5</gejala_5>\n";
				print "  <gejala_6>$gejala_6</gejala_6>\n";
				print "  <gejala_7>$gejala_7</gejala_7>\n";
				print "  <gejala_8>$gejala_8</gejala_8>\n";
				print "  <gejala_9>$gejala_9</gejala_9>\n";
				print "  <gejala_10>$gejala_10</gejala_10>\n";
				print "  <kategori>$kategori</kategori>\n";
				print "  <jam>$rekapitulasi</rekapitulasi>\n";
				print "  <id_user>$keterangan</keterangan>\n";
				print "  <id_pengujian>$id_pengujian</id_pengujian>\n";
				print "</record>\n";
			}
	print "</pengujian>\n";
}
else{
	$null="null";
	print "<pengujian>\n";
		print "<record>\n";
				print "  <tanggal>$null</tanggal>\n";
				print "  <jam>$null</jam>\n";
				print "  <id_user>$null</id_user>\n";
				print "  <gejala_1>$null</gejala_1>\n";
				print "  <gejala_2>$null</gejala_2>\n";
				print "  <gejala_3>$null</gejala_3>\n";
				print "  <gejala_4>$null</gejala_4>\n";
				print "  <gejala_5>$null</gejala_5>\n";
				print "  <gejala_6>$null</gejala_6>\n";
				print "  <gejala_7>$null</gejala_7>\n";
				print "  <gejala_8>$null</gejala_8>\n";
				print "  <gejala_9>$null</gejala_9>\n";
				print "  <gejala_10>$null</gejala_10>\n";
				print "  <kategori>$null</kategori>\n";
				print "  <rekapitulasi>$null</rekapitulasi>\n";
				print "  <keterangan>$null</keterangan>\n";
				print "  <id_pengujian>$null</id_pengujian>\n";
		print "</record>\n";
	print "</pengujian>\n";
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
	