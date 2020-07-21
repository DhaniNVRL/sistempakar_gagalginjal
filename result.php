<?php
session_start();
?>

<script type="text/javascript"> 
function PRINT(){ 
win=window.open('Pengujian/printhasil.php','win','width=1000, height=400, menubar=0, scrollbars=1, resizable=0, location=0, toolbar=0, status=0'); } 
</script>
<?php

$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	$id_user=$_SESSION["cid"];
	
	$sql="select * from `$tbuser` where `id_user`='$id_user'";
	$d=getField($conn,$sql);
				$id_user=$d["id_user"];
				$username=$d["username"];
				$nama_user=$d["nama_user"];
				$jenis_kelamin=$d["jenis_kelamin"];
				$tgl_lahir=($d["tgl_lahir"]);
				$password=$d["password"];
				$status=$d["status"];
				$email=$d["email"];
	
	$gejala_1=strip_tags($_SESSION["gejala_1"]);
	$gejala_2=strip_tags($_SESSION["gejala_2"]);
	$gejala_3=strip_tags($_SESSION["gejala_3"]);
	$gejala_4=strip_tags($_SESSION["gejala_4"]);
	$gejala_5=strip_tags($_SESSION["gejala_5"]);
	$gejala_6=strip_tags($_SESSION["gejala_6"]);
	$gejala_7=strip_tags($_SESSION["gejala_7"]);
	$gejala_8=strip_tags($_SESSION["gejala_8"]);
	
	$gabpilih="
	<div align='left'><ol>
	<li>Sering Mengalami Buang Air Kecil(Poliuria) : $gejala_1</li>
	<li>Mengalami Berat Badan Turun Cepat : $gejala_2</li>
	<li>Sering Mengalami Air Seni Dikerubuti Semut : $gejala_3</li>
	<li>Sering Merasa Haus, Banyak Minum(Polidipsia) : $gejala_4</li>
	<li>Sering Merasa Lapar, Banyak Makan(Polifagia) : $gejala_5</li>
	<li>Sering Merasakan Kesemutan Atau Mati Rasa : $gejala_6</li>
	<li>Sering Mengalami Luka yang Lama Sembuh : $gejala_7</li>
	<li>Sering Mengalami Infeksi Kulit yang Berulang : $gejala_8</li>
	</ol></div>
	
	";
	
	//rumus naive bayes
	if($gejala_1=="Tidak" && $gejala_2=="Tidak" && $gejala_3=="Tidak" && $gejala_4=="Tidak" && $gejala_5=="Tidak" && $gejala_6=="Tidak" && $gejala_7=="Tidak" && $gejala_8=="Tidak" ){
			echo "<strong>Anda Tidak Terdiagnosa Mengalami Penyakit Apapun </strong><br>";
			echo " Silakan Pilih kembali gejala yang anda Alami";
		
	}
	else{
	$jumK1=getOut($conn,"Diabetes Tipe 1");
	$jumK2=getOut($conn,"Diabetes Tipe 2");
	$totK=$jumK1+$jumK2;
	
	
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
	
	
$HA=($jumK1/$totK)*($jumgejala1A/$jumK1)*($jumgejala2A/$jumK1)*($jumgejala3A/$jumK1)*($jumgejala4A/$jumK1)*($jumgejala5A/$jumK1)*($jumgejala6A/$jumK1)*($jumgejala7A/$jumK1)*($jumgejala8A/$jumK1);
$HB=($jumK2/$totK)*($jumgejala1B/$jumK2)*($jumgejala2B/$jumK2)*($jumgejala3B/$jumK2)*($jumgejala4B/$jumK2)*($jumgejala5B/$jumK2)*($jumgejala6B/$jumK2)*($jumgejala7B/$jumK2)*($jumgejala8B/$jumK2);

$SHA="($jumK1/$totK)*($jumgejala1A/$jumK1)*($jumgejala2A/$jumK1)*($jumgejala3A/$jumK1)*($jumgejala4A/$jumK1)*($jumgejala5A/$jumK1)*($jumgejala6A/$jumK1)*($jumgejala7A/$jumK1)*($jumgejala8A/$jumK1)";
$SHB="($jumK2/$totK)*($jumgejala1B/$jumK2)*($jumgejala2B/$jumK2)*($jumgejala3B/$jumK2)*($jumgejala4B/$jumK2)*($jumgejala5B/$jumK2)*($jumgejala6B/$jumK2))*($jumgejala7B/$jumK2)*($jumgejala8B/$jumK2)";	
	
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
	$solusi="Menormalkan kadar glukosa, lemak, dan insulin di dalam darah serta memberikan pengobatan penyakit kronis lainnya. Langkah yang dilakukan terutama : Diet; Mengurangi kalori dan meningkatkan konsumsi vitamin. aktivitas fisik; olahraga teratur, pengelolaan glukosa dan meningkatkan kepekaan terhadap insulin, Obat-obat hipoglikemia oral : Sulfonylurea untuk merangsang pancreas menghasilkan insulin dan mengurangi resistensi terhadap insulin, Terapi insulin";
	$saran="Membiasakan diri sejak dini dengan pola hidup sehat";	
	}

//echo "Diabetes Tipe 1 : $SHA =$HA<br>";
//echo "Diabetes Tipe 2 : $SHB =$HB<br>";


$rekap="Diabetes Tipe 1 : $SHA =$HA<br>";
$rekap.="Diabetes Tipe 2 : $SHB =$HB<br>";
$rekap.="Bobot Tertinggi =$out ($max) <br>";
	
//	echo "Anda Terdiagnosa <strong>$out </strong><br>";
	//echo " $keterangan";
	
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



			<div class="col-md-15">
			<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
					<div class="price-box popular">
					<?php
					
						$gab="<h2 class='info-text'> Hasil Diagnosa </h2>
						<hr size='3px' width='100%' color='black'>
						<p align='left'> Nama : $nama_user
						<p align='left'> Email : $email
							<p align='left'> Tgl Lahir :  $tgl_lahir
						<p align='left'> Jenis Kelamin : $jenis_kelamin
						
						<hr size='3px' width='100%' color='black'>
						<p align='left'><strong>Anda terdiagnosa : </strong> $kategori 
						<p align='left'><strong>Gejala Yang Anda pilih :</strong> $gabpilih
						<p align='left'><strong>Penjelasan : </strong>$keterangan
							<p align='left'><strong>Pengobatan : </strong>$solusi
							<p align='left'><strong>Saran : </strong>$saran
							<p align='left'><strong>Waktu Diagnosa : </strong>".WKT($tanggal)." jam  $jam WIB";
							echo $gab;
							$_SESSION["gab"]=$gab;
							?>
							
							
				<hr size="3px" width="80%" color="black">
					
					<div class="col-md-15">
						<div class="feature-copy">
							
							
						 <input type="submit" name="submit" value="Print" alt='PRINT' OnClick="PRINT()"> 	
							</td></tr>
						</div>
					</div>
					</div>
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
