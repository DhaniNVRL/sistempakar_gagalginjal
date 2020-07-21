

<form action="" method="post">
<div class="col-md-15">
					<div class="price-box popular">
						<div class="popular-text">Diagnosa. </div>
						<h2 class="info-text">Pilihlah sesuai dengan apa yang anda benar-benar alami!..</h2>
				<hr size="15px" width="80%" color="black">
			<div class= "pertanyaan6">
			<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						
						<div class="feature-copy">
							<h3>Apakah Anda Sering Merasakan Kesemutan Atau Mati Rasa ?</h3>
							<p>Adanya rasa kesemutan dan kebas (mati rasa) pada bagian tubuh seperti kaki, jari-jemari, dan tangan.</p>
							<input type="radio" name="gejala_6" id="gejala_6" value="Ya" <?php if($gejala_6=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_6" id="gejala_6" value="Tidak" <?php if($gejala_6=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
					</div>
					</div>
<center><input class="btn btn-success" name="Lanjut" type="submit" id="Lanjut" value="Lanjut" /></center>
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
</form>



<?php
if(isset($_POST["Lanjut"])){
	$_SESSION["gejala_6"]=strip_tags($_POST["gejala_6"]);
	die ("<script>document.location.href='?mnu=tanya7';</script>");

}
?>