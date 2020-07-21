<?php
header("Content-type: text/xml");

include "../konmysqli.php";
$sql = "select * from `$tbdatalatih`";
if(getJum($conn,$sql)>0){
	print "<datalatih>\n";
		$arr=getData($conn,$sql);
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
			    $gejala_9=$d["gejala_9"];
				$gejala_10=$d["gejala_10"];
				$kategori=$d["kategori"];
				$add2=$d["add2"];
			    $add3=$d["add3"];
				$add4=$d["add4"];
												
				print "<record>\n";
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
				print "  <add2>$add2</add2>\n";
				print "  <add3>$add3</add3>\n";
				print "  <add4>$add4</add4>\n";
				print "  <id_datalatih>$id_datalatih</id_datalatih>\n";
				print "</record>\n";
			}
	print "</datalatih>\n";
}
else{
	$null="null";
	print "<datalatih>\n";
		print "<record>\n";
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
				print "  <add2>$null</add2>\n";
				print "  <add3>$null</add3>\n";
				print "  <add4>$null</add4>\n";
				print "  <id_datalatih>$null</id_datalatih>\n";
		print "</record>\n";
	print "</datalatih>\n";
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
	