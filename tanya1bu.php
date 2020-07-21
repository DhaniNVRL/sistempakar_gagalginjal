
<?php
$gejala_1="Tidak";
$gejala_2="Tidak";
$gejala_3="Tidak";
$gejala_4="Tidak";
$gejala_5="Tidak";
$gejala_6="Tidak";
$gejala_7="Tidak";
$gejala_8="Tidak";

if(isset($_POST["Hitung"])){
	$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	$id_user=$_SESSION["cid"];
	$gejala_1=strip_tags($_POST["gejala_1"]);
	$gejala_2=strip_tags($_POST["gejala_2"]);
	$gejala_3=strip_tags($_POST["gejala_3"]);
	$gejala_4=strip_tags($_POST["gejala_4"]);
	$gejala_5=strip_tags($_POST["gejala_5"]);
	$gejala_6=strip_tags($_POST["gejala_6"]);
	$gejala_7=strip_tags($_POST["gejala_7"]);
	$gejala_8=strip_tags($_POST["gejala_8"]);
}
	?>

<form action="" method="post">
<div class="gtco-container">
		
				<div class="col-md-15 text-center gtco-heading">
					<h2>Diagnosa Penyakit</h2>
					<p>Pilihlah sesuai dengan apa yang anda benar-benar alami!.</p>
				</div>
			</div>
			<div class="pertanyaan1">
				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						<p>Pertanyaan 1 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Sering Buang Air Kecil (Poliuria) ?</h3>
							<p>Lebih sering buang air dari biasanya dan volume air seni yang abnormal.
							</p>
							<input type="radio" name="gejala_1" id="gejala_1"  checked="checked" value="Ya" <?php if($gejala_1=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_1" id="gejala_1" value="Tidak" <?php if($gejala_1=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
					</div>
					</div>
<div class="col-md-15" "pertanyaan2">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
					<p>Pertanyaan 2 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Berat Badan Turun Cepat ?</h3>
							<p>Walau nafsu makan meningkat, penderita diabetes dapat mengalami penurunan berat badan, bahkan sangat drastis.</p>
							<input type="radio" name="gejala_2" id="gejala_2"  checked="checked" value="Ya" <?php if($gejala_2=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_2" id="gejala_2" value="Tidak" <?php if($gejala_2=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
					</div>
<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						<p>Pertanyaan 3 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Air Seni Dikerubuti Semut ?</h3>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
							<input type="radio" name="gejala_3" id="gejala_3"  checked="checked" value="Ya" <?php if($gejala_3=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_3" id="gejala_3" value="Tidak" <?php if($gejala_3=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
					</div>
<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
					<p>Pertanyaan 4 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Sering Merasa Haus, Banyak Minum(Polidipsia) ?</h3>
							<p>Polidipsia adalah kondisi dimana seseorang merasakan haus yang berlebihan dan seringkali merupakan gejala awal diabetes.</p>
							<input type="radio" name="gejala_4" id="gejala_4"  checked="checked" value="Ya" <?php if($gejala_4=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_4" id="gejala_4" value="Tidak" <?php if($gejala_4=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
</div>

				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						<p>Pertanyaan 5 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Sering Merasa Lapar, Banyak Makan(Polifagia) ?</h3>
							<p>Polidipsia adalah kondisi dimana seseorang merasakan haus yang berlebihan dan seringkali merupakan gejala awal diabetes.</p>
							<input type="radio" name="gejala_5" id="gejala_5"  checked="checked" value="Ya" <?php if($gejala_5=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_5" id="gejala_5" value="Tidak" <?php if($gejala_5=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
			</div>
<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						<p>Pertanyaan 6 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Sering Kesemutan Pada Malam Hari ?</h3>
							<p>Polidipsia adalah kondisi dimana seseorang merasakan haus yang berlebihan dan seringkali merupakan gejala awal diabetes.</p>
							<input type="radio" name="gejala_6" id="gejala_6"  checked="checked" value="Ya" <?php if($gejala_6=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_6" id="gejala_6" value="Tidak" <?php if($gejala_6=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
					</div>
<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						<p>Pertanyaan 7 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Luka Luar yang Lama Sembuh ?</h3>
							<p>Polidipsia adalah kondisi dimana seseorang merasakan haus yang berlebihan dan seringkali merupakan gejala awal diabetes.</p>
							<input type="radio" name="gejala_7" id="gejala_7"  checked="checked" value="Ya" <?php if($gejala_7=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_7" id="gejala_7" value="Tidak" <?php if($gejala_7=="Tidak"){echo"checked";}?>/>Tidak</td></tr>

						</div>
					</div>
					</div>
				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
							<p>Pertanyaan 8 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Infeksi Kulit yang Berulang ?</h3>
							<p>Polidipsia adalah kondisi dimana seseorang merasakan haus yang berlebihan dan seringkali merupakan gejala awal diabetes.</p>
							<input type="radio" name="gejala_8" id="gejala_8"  checked="checked" value="Ya" <?php if($gejala_8=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_8" idate()id="gejala_8" value="Tidak" <?php if($gejala_8=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
					</div>

<?php
if(isset($_POST["Hitung"])){
	?>
    <center><input class="btn btn-success" name="Reset" type="reset" id="Reset" value="Reset" /></center>

<?php
	
}
else{
?>
<center><input class="btn btn-success" name="Hitung" type="submit" id="Simpan" value="Hitung" /></center>

<?php
}
?>
				</div>
				
		</div>	
				<div class="col-md-12 macbook-wrap animate-box" data-animate-effect="fadeInRight">
				
					
					


<?php
if(isset($_POST["Hitung"])){
	$tanggal=date("Y-m-d");
	$jam=date("H:i:s");
	$id_user=$_SESSION["cid"];
	$gejala_1=strip_tags($_POST["gejala_1"]);
	$gejala_2=strip_tags($_POST["gejala_2"]);
	$gejala_3=strip_tags($_POST["gejala_3"]);
	$gejala_4=strip_tags($_POST["gejala_4"]);
	$gejala_5=strip_tags($_POST["gejala_5"]);
	$gejala_6=strip_tags($_POST["gejala_6"]);
	$gejala_7=strip_tags($_POST["gejala_7"]);
	$gejala_8=strip_tags($_POST["gejala_8"]);
	
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
	
if($HA>=$HB){
	
	$max=$HA;
	$out="Diatebetes Tipe 1";
	$keterangan="Penyakit Diabetes yang bergantung pada insulin, dimana tubuh kekurangan hormon insulin. Dikenal dengan istilah Insulin Dependent Deiabetes Melitus(IDDM). Diabetes tipe ini muncul ketika Pankreas sebagai pabrik insulin tidak lagi dapat atau mampu memproduksi insulin. Akibatnya insulin tubuh kurang atau tidak ada sama sekali. Glukosa menumpuk dalam darah karena tidak lagi dapat diangkut ke dalam sel.";
	}
else if($HB>=$HA){
		
	$max=$HB;
	$out="Diabetes Tipe 2";
	$keterangan="Diabetes Melitus yang sering disebut dengan Non-Insulin Dependent Diabetes Melitus atau diabetes mellitus tanpa bergantung pada insulin. Penyebab penyakit diabetes tipe 2 ini adalah kurangnya insulin pada tubuh bukan karena pankreas yang tidak berfungsi dengan baik.";
	}

//echo "Diabetes Tipe 1 : $SHA =$HA<br>";
//echo "Diabetes Tipe 2 : $SHB =$HB<br>";


$rekap="Diabetes Tipe 1 : $SHA =$HA<br>";
$rekap.="Diabetes Tipe 2 : $SHB =$HB<br>";
$rekap.="Bobot Tertinggi =$out ($max) <br>";
	
	echo "Anda Terdiagnosa <strong>$out </strong><br>";
	echo " $keterangan";
	
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
	
}//else tidak 8
}

					//macbook.png
?>
					
					
					
				</div>
		
</div>
</form>

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



