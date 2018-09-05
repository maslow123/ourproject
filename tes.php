<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Google maps </title>
		
		<!-- Le styles -->
		
		<style type="text/css">		
			body {
				padding-top: 20px;
				padding-bottom: 40px;				
			}
			/* Custom container */
			.container-narrow {
				margin: 0 auto;
				max-width: 700px;
			}
			.container-narrow > hr {
				margin: 30px 0;
			}
			/* Main marketing message and sign up button */
			
</style>
	</head>
	<body>
		
		<form action='tes.php' method='POST'>
  <input type="text" name='asal' class="input-large" placeholder="Alamat asal">
  <input type="text"  name='tujuan' class="input-large" placeholder="Alamat Yang dituju">
 
  <button type="submit" name="btn">rute</button>
  <button type="submit" name="btnel" class="btn btn-warning">Rutelel</button>
  <button type="submit" name="btnelel" class="btn btn-warning">Rutelelel</button>
</form>
		
	<p class='lead'>
	Rute  Google maps
	</p>
<div class='span8'>
							<?php
	if(isset($_POST['btn'])) {
	$saddr = "jakarta";
	$daddr = "depok";
	include ('maps.php');
			}
	else if(isset($_POST['btnel'])){
	$saddr = "cileungsi";
	$daddr = "jakarta";
	include ('maps.php');	
	}
	else
	{
		$saddr = "bandung";
		$daddr = "jonggol";
		include ('maps.php');	
	}
	?>
						</div>
							</div>
							</body>
							</html>
