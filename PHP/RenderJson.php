<?php
 
include 'FrameWork/DataBase/db.php';
//post_status=all&post_type=nf_sub&form_id=3
$sql = " SELECT * FROM test WHERE 1";
$result = $conn->query($sql);
$rows = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		$rows[] = $row ;
    }
} else {
    echo "0 results";
}
print json_encode($rows);
$conn->close();
?>
