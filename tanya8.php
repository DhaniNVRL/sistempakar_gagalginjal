
<form action="" method="post">
<div class="col-md-15">
					<div class="price-box popular">
						<div class="popular-text">Diagnosa. </div>
						<h2 class="info-text">Pilihlah sesuai dengan apa yang anda benar-benar alami!..</h2>
				<hr size="15px" width="80%" color="black">
			<div class= "pertanyaan8">
			<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
							<p>Pertanyaan 8 : </p>
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Infeksi Kulit yang Berulang ?</h3>
							<p>Infeksi dapat tumbuh dalam lipatan kulit yang hangat dan lembab, seperti antara jari tangan dan kaki, di bawah payudara, dan di dalam atau di sekitar alat kelamin.</p>
							<input type="radio" name="gejala_8" id="gejala_8" value="Ya" <?php if($gejala_8=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_8" id="gejala_8" value="Tidak" <?php if($gejala_8=="Tidak"){echo"checked";}?>/>Tidak</td></tr>
						</div>
					</div>
					</div>

					</div>
<center><input class="btn btn-success" name="Submit" type="submit" id="Submit" value="Submit" /></center>
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">
      100%
    </div>
</form>


<?php
if(isset($_POST["Submit"])){
	$_SESSION["gejala_8"]=strip_tags($_POST["gejala_8"]);
	die ("<script>document.location.href='?mnu=result';</script>");

}
?>