<?php

# $Done_nr:
# 1 -> Wyświetlaj
# 2 -> Odrobione
# 3 -> Usunięte



$Done_nr = $_GET["Donenr"];
$Co_zmienic = $_GET["Cozmienic"];


$link = mysqli_connect("host", "user", "password", "base");
 
// Check connection
if($link === false){
    die("Nie idzie się połączyć " . mysqli_connect_error());
}
 
// Attempt update query execution
$sql = "UPDATE Homework SET Done='$Done_nr' WHERE id='$Co_zmienic'";
if(mysqli_query($link, $sql)){
    echo "Udało się!";
	echo "<script> setTimeout('window.history.back()', 1000); </script>";
	
} else {
    echo "Weź coś pomajstruj w kodzie majster -> błąd $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>