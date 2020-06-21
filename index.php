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
			<div class="wrap-contact100" style="background-color: #846add;">

				
				<h1 style="color: white; font-size: 70px;" class="contact100-form-btn">
				<i class="fa fa-home" aria-hidden="true" style="margin-right:20px;"></i> 
				HOMEWORK <h1>
			
		
			</div>
		</div>

<!-- DODAWANIE PRAC-->
<?

require("wypisz_naj_liczbe.php");
for ($x = $maks_id; $x >= 1; $x--) {
	
	#echo $x;	
$id_dane = $x;
require("wypisz_prace.php");
	
if ($Done == 1) {
if ($Date_ask and $Subject and $Teacher and $Description) {
#echo $x;

echo '

		<div class="container-contact100">
			<div class="wrap-contact100">

<div class="wrap-input100 validate-input">
				<span class="contact100-form-title" style="font-size: 21px;">
				
';

if ($Date_ask) {
	echo '			
						<i class="fa fa-th-list" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b>'.$Date_ask.'
						
						</br></br>
						
';}


if ($Deadline) {
	echo '			
						<i class="fa fa-warning" aria-hidden="true"></i> 
						<b style="color: #fff;">.</b>'.$Deadline.'
						
						</br></br>
						
';}

echo '

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
						
$Done_nr = 2;
$Co_zmienic = $x;	
					
echo '

<a href="aktualizuj_nr.php?Donenr='.$Done_nr.'&Cozmienic='.$Co_zmienic.'">
<button class="contact100-form-btn" style="float:left; width: 45%; margin-right: 20px; margin-left:10px;" type="submit">
						<i class="fa fa-heartbeat" aria-hidden="true" style="margin-right:6px;"></i>
							Odrobione
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


<!-- DODAWANIE PRAC-->
		<div class="container-contact100">
			<div class="wrap-contact100">


				<form class="contact100-form validate-form" method="POST" ENCTYPE="multipart/form-data">
					<span class="contact100-form-title">
						Dodaj prace domową
					</span>

					<div class="wrap-input100 validate-inpu">
						<input class="input100" type="date" name="Date_ask" placeholder="Na kiedy trzeba zrobić?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="date" name="Deadline" placeholder="Na kiedy trzeba zrobić?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-warning" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Subject" placeholder="Jaki przedmiot?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="Teacher" placeholder="Kto zadał?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="text" name="Where_send" placeholder="Gdzie wysłać?">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Message is required">
						<textarea class="input100" name="Description" placeholder="Treść zadania"></textarea>
						<span class="focus-input100"></span>
					</div>
					
					

				<div class="wrap-input100" data-validate = "Please enter your message">
					
					<input class="input100" name="plik" type="file" style = "margin: auto; padding:16px; text-align:center;"/>
					
					<span class="focus-input100"></span>
				</div>


					
					

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit">
							Dodaj pracę domową
						</button>
					</div>
				
				<a href="odrobione.php">
					<div class="container-contact100-form-btn">
						<div class="contact100-form-btn">
							Przejdź do odrobionych
						</div>
					</div></a>	
				

				</form>



					<div>
					

<?php

$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
$plik_rozmiar = $_FILES['plik']['size'];

$plik_nazwa_n = str_replace(' ', '', $plik_nazwa);

	if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "upload/$plik_nazwa_n");
	 echo ' i wgrano plik </p>';
	}


$Date_ask_f = $_POST['Date_ask'];
$Deadline_f = $_POST['Deadline'];
$Subject_f = $_POST['Subject'];
$Teacher_f = $_POST['Teacher'];
$Where_send_f = $_POST['Where_send'];
$Description_f = $_POST['Description'];
$Done = 1;
#echo $File_source_f;


$servername = "host";
$username = "user";
$password = "password";
$dbname = "base";


if($Date_ask_f) {

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Homework(id, Date_ask, Deadline, Subject, Teacher, Where_Send, Description, Done, File_source) VALUES ('','$Date_ask_f','$Deadline_f', '$Subject_f', '$Teacher_f', '$Where_send_f', '$Description_f', '$Done', '$plik_nazwa_n')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>


					</div>		
		

		
		
			</div>
		</div>




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
