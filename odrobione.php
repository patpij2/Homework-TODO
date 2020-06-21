<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homework check</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #fff;
background-image:
linear-gradient(90deg, transparent 79px, #abced4 79px, rgba(132,106,221,0.9), 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;">



<!-- POWRÓT-->
		<div class="container-contact100">
			<div class="wrap-contact100">


				<form class="contact100-form validate-form" action="" method="POST" ENCTYPE="multipart/form-data">

				<a href="index.php">
					<div class="container-contact100-form-btn">
						<div class="contact100-form-btn">
							Wróć do aktualnych
						</div>
					</div></a>	
				
				</form>
			
		
			</div>
		</div>



<!-- DODAWANIE PRAC-->
<?

require("wypisz_naj_liczbe.php");
for ($x = $maks_id; $x >= 1; $x--) {
	
	#echo $x;	
$id_dane = $x;
require("wypisz_prace.php");
	
if ($Done == 2) {
if ($Date_ask and $Subject and $Teacher and $Description) {
	

echo '

		<div class="container-contact100">
			<div class="wrap-contact100">

<div class="wrap-input100 validate-input">
				<span class="contact100-form-title" style="font-size: 21px;">
				
				
						<i class="fa fa-warning" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b>'.$Date_ask.'
						
						</br></br>

						<i class="fa fa-user" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b>'.$Subject.' przez '.$Teacher.'
						
						</br></br>
				';		
if ($Where_send) {

echo '
						
						<i class="fa fa-envelope" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b>'.$Where_send.'
						
						</br></br>

'; 

}

if ($File_source) {

echo '
						<i class="fa fa-paper-plane" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b> <a style="font-size:20px;font-weight: bold;" href="upload/'.$File_source.'">'.$File_source.'</a>
						
						</br></br>	
'; 

}

echo '						
						
						
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<b style="color: #fff;">.</b> Treść zadania:
						
						</span>
						
						<p style="font-size: 18px; margin-top:-25px;">'.$Description.' </p>
						
						</br></br>
						
						
						<div style="text-align: center; margin-left:auto;margin-right:auto;">
						
';
						
$Done_nr = 1;
$Co_zmienic = $x;	
					
echo '

<a href="aktualizuj_nr.php?Donenr='.$Done_nr.'&Cozmienic='.$Co_zmienic.'">
<button class="contact100-form-btn" style="float:left; width: 45%; margin-right: 20px; margin-left:10px;" type="submit">
						<i class="fa fa-heartbeat" aria-hidden="true" style="margin-right:6px;"></i>
							Jednak nie odrobione
						</button></a>	';							

								
$Done_nr = 3;
						
echo '
<a href="aktualizuj_nr.php?Donenr='.$Done_nr.'&Cozmienic='.$Co_zmienic.'">
						<button class="contact100-form-btn" style="float:left; width: 45%;margin-left:10px" action="aktualizuj_nr.php" type="submit">
						<i class="fa fa-trash-o" aria-hidden="true" style="margin-right:6px;"></i>
							Usuń
						</button></a>	';
					

echo '		
						</div>
						
						
</div>
			
			

			</div>
		</div>
';
}
}	
}
?>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
