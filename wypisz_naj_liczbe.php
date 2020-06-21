<?

require("connect.php");

$sql = "SELECT id FROM Homework ORDER BY id DESC LIMIT 1";

$result = $conn->query($sql);

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()) {
		
		$maks_id = $row['id'];
		
		echo $maks_id;
	}
}
else {
	echo "Nie znaleziono rekordów! max licz";
}


?>