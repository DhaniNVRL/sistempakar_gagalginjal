

<form action="" method="post">
<div class="col-md-15">
					<div class="price-box popular">
						<div class="popular-text">Diagnosa. </div>
						<h2 class="info-text">Pilihlah sesuai dengan apa yang anda benar-benar alami!..</h2>
				<hr size="15px" width="80%" color="black">
			<div class= "pertanyaan3">
				<div class="col-md-15">
					<div class="feature-center animate-box" data-animate-effect="fadeInLeft">
						
						<div class="feature-copy">
							<h3>Apakah Anda Mengalami Air Seni Dikerubuti Semut ?</h3>
							<p>Air seni yang terkontaminasi atau tercampur dengan gula menyebabkan air seni dikerubuti semut.</p>
							<input type="radio" name="gejala_3" id="gejala_3" value="Ya" <?php if($gejala_3=="Ya"){echo"checked";}?>/>Ya 
							<input type="radio" name="gejala_3" id="gejala_3" value="Tidak" <?php if($gejala_3=="Tidak"){echo"checked";}?>/>Tidak
							</td></tr>
						</div>
					</div>
					</div>
					</div>
<center><input class="btn btn-success" name="Lanjut" type="submit" id="Lanjut" value="Lanjut" /></center>
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:30%">
      30%
    </div>
</form>



<?php
if(isset($_POST["Lanjut"])){
	$_SESSION["gejala_3"]=strip_tags($_POST["gejala_3"]);
	die ("<script>document.location.href='?mnu=tanya4';</script>");

}
?>