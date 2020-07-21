<?php
require_once"../koneksivar.php";

$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
if ($conn->connect_error) {
  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

 	$buffer = ""; 
    $separator = ","; //, atau ;
    $newline = "\r\n"; 
    		    
    $buffer = "id_datalatih".$separator ."gejala_1".$separator ."gejala_2".$separator ."gejala_3".$separator ."gejala_4".$separator. "gejala_5".$separator ."gejala_6".$separator."gejala_7".$separator."gejala_8".$separator."gejala_9".$separator."gejala_10".$separator."kategori".$separator."add2".$separator."add3".$separator."add4".$separator; 
    $buffer .= $newline; 
    
  $sql="select `id_datalatih`,`gejala_1`,`gejala_2`,`gejala_3`,`gejala_4`,`gejala_5`,`gejala_6`,`gejala_7`,`gejala_8`,`gejala_9`,`gejala_10`,`kategori`,`add2`,`add3`,`add4` from `$tbdatalatih` order by `id_datalatih` desc";
  $jum=getJum($conn,$sql);	
  if($jum>0){						
	  $arr=getData($conn,$sql);
	  foreach($arr as $d) {		 
					$value=$d["id_datalatih"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_1"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_2"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_3"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_4"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_5"];$buffer .= "\"".$value."\"".$separator;
					$value=$d["gejala_6"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_7"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_8"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_9"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["gejala_10"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["kategori"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add2"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add3"];$buffer .= "\"".$value."\"".$separator; 
					$value=$d["add4"];$buffer .= "\"".$value."\"".$separator; 
				$buffer .= $newline; 
		}	
  }
  else{
    $buffer .= $newline; 
	  }
    header("Content-type: application/vnd.ms-excel"); 
    header("Content-Length: ".strlen($buffer)); 
    header("Content-Disposition: attachment; filename=report.csv"); 
    header("Expires: 0"); 
    header("Cache-Control: must-revalidate, post-check=0,pre-check=0"); 
    header("Pragma: public"); 

    print $buffer;
	
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