<?php
session_start();
echo "Thanks for submitting.Adding them to databse and displaying ";
/* Set Variables */
$host="127.0.0.1:3306";
$db="mydb";
$username="root";
$pass="valencebond";

/* Attempt to connect */
$conn=new mysqli($host,$username,$pass,$db);
if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
else
{
$update="INSERT INTO Users (username, email,id)
VALUES ('aaa','bbb','1')"; 
		{
    		$last_id = $conn->insert_id;
    		echo "New record created successfully. Last inserted ID is: " . $last_id;
 		}
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);
echo $sql;
if ($result->num_rows >= 0) {
    echo "<table><tr><th>username</th><th>mail</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["username"]." ".$row["mail"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
}
?>
