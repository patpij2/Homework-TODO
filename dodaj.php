<?php

# 1 -> Wyświetlaj
# 2 -> Odrobione
# 3 -> Usunięte

#Wysyłanie pliki

$plik_tmp = $_FILES['plik']['tmp_name'];
$plik_nazwa = $_FILES['plik']['name'];
echo $plik_nazwa;
$plik_rozmiar = $_FILES['plik']['size'];


if ($plik_nazwa) {
if(is_uploaded_file($plik_tmp)) {
     move_uploaded_file($plik_tmp, "upload/$plik_nazwa");
	 echo '<p style= "text-align: center;font-size: 20px; padding: 15px;"> udało się!';
}
}


#Wysyłanie SQL

require("connect.php");

$Date_ask_f = $_POST['Date_ask'];
$Deadline_f = $_POST['Deadline'];
$Subject_f = $_POST['Subject'];
$Teacher_f = $_POST['Teacher'];
$Where_send_f = $_POST['Where_send'];
$Description_f = $_POST['Description'];
$Done = 1;
$File_source_f = $plik_nazwa;
echo $File_source_f;

if ($Date_ask_f and $Subject_f and $Teacher_f and $Description_f) {
	
$sql = "INSERT INTO Homework(id, Date_ask, Deadline, Subject, Teacher, Where_Send, Description, Done, File_source) VALUES ('','$Date_ask_f','$Deadline_f', '$Subject_f', '$Teacher_f', '$Where_send_f', '$Description_f', '$Done', '$File_source_f')";
#$sql2 = "SELECT Imie, Nazwisko from test";

$result = $conn->query($sql);
#$result2 = $conn->query($sql2);

if ($result) {
    echo 'Super! Udało się!</p>';
} else {
    echo "Pogrzeb w kodzie, może kiedyś pyknie";
}
}

#if($result->num_rows>0) {
#	while($row = $result->fetch_assoc()) {
#		echo "Wysłano!";
#		#echo "Imię: ".$row['Imie']." Nazwisko: ".$row['Nazwisko']. "<br />";
#	}
#}
#else {
#	echo "Nie znaleziono rekordów!";
#}

?>
