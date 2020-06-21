<?

require("connect.php");

$sql = "SELECT * from Homework WHERE id = '$id_dane'";

$result = $conn->query($sql);

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		
		$Date_ask = $row['Date_ask'];
		$Deadline = $row['Deadline'];
		$Subject = $row['Subject'];
		$Teacher = $row['Teacher'];
		$Where_send = $row['Where_Send'];
		$Description = $row['Description'];
		$Done = $row['Done'];
		$File_source = $row['File_source'];
		
		
	}
}
else {
	$Done = 0;
	#echo "Nie znaleziono rekordów!";
}



?>