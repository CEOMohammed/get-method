<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_moves";

	// Create a new database connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check the database connection
    if ($conn->connect_error) {
        die("connection field" . $conn->connect_error);
    }
	//get number value from get.html and store the value in the database
    $number = $_GET['value'];
    $sql = "INSERT INTO get (Number) VALUES ('$number')";

    // Check the database connection
    if ($conn->query($sql) === TRUE) {
        echo "<br>";
    } else {
        echo "an error happened" . $conn->error;
    }

	// get the last vlaue in the database
    $sql = "SELECT * FROM get WHERE id=(SELECT MAX(id)FROM get)";


	$result = $conn->query($sql);

	//print last value
	if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			echo "num: "   . $_GET["value"] ;echo " <br>ID : " . $row["ID"];
		}
	} else {
		echo "there is no data";
	}
    // Close the database connection
    $conn->close();

?>