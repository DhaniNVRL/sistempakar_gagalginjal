

<form action="" method="post">
<div class="col-md-15">
					<div class="price-box popular">
						<div class="popular-text">Diagnosa. </div>
						<h2 class="info-text">Pilihlah sesuai dengan apa yang anda benar-benar alami!..</h2>
				<hr size="15px" width="80%" color="black">
			<div class= "pertanyaan5">
				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						
						<div class="feature-copy">
							<h3>Apakah Anda Sering Merasa Lapar, Banyak Makan(Polifagia) ?</h3>
							<p>Polifagia adalah kondisi dimana seseorang merasakan lapar yang berlebihan. Disebabkan kurangnya insulin untuk memasukkan gula ke sel membuat otot dan organ melemah dan tubuh kehabisan energi..</p>
							<input type="radio" name="gejala_5" id="gejala_5" value="Ya" <?php if($gejala_5=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_5" id="gejala_5" value="Tidak" <?php if($gejala_5=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
			</div>
					</div>
<center><input class="btn btn-success" name="Lanjut" type="submit" id="Lanjut" value="Lanjut" /></center>
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50%
    </div>
</form>



<?php
if(isset($_POST["Lanjut"])){
	$_SESSION["gejala_5"]=strip_tags($_POST["gejala_5"]);
	die ("<script>document.location.href='?mnu=tanya6';</script>");

}
?>