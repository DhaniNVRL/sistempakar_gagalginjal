

<form action="" method="post">
<div class="col-md-15">
					<div class="price-box popular">
						<div class="popular-text">Diagnosa. </div>
						<h2 class="info-text">Pilihlah sesuai dengan apa yang anda benar-benar alami!..</h2>
				<hr size="15px" width="80%" color="black">
			<div class= "pertanyaan2">
				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
					
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Berat Badan Turun Cepat ?</h3>
							<p>Walau nafsu makan meningkat, penderita diabetes dapat mengalami penurunan berat badan, bahkan sangat drastis.</p>
							<input type="radio" name="gejala_2" id="gejala_2" value="Ya" <?php if($gejala_2=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_2" id="gejala_2" value="Tidak" <?php if($gejala_2=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
					</div>
					</div>
<center><input class="btn btn-success" name="Lanjut" type="submit" id="Lanjut" value="Lanjut" /></center>
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:20%">
      20%
    </div>
</form>



<?php
if(isset($_POST["Lanjut"])){
	$_SESSION["gejala_2"]=strip_tags($_POST["gejala_2"]);
	die ("<script>document.location.href='?mnu=tanya3';</script>");

}
?>