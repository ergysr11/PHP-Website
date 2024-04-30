<?php
//Connect to the database (replace with your database credentials)
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "kursi";

$connection = new mysqli($servername, $db_username, $db_password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connection_error);
}

//Get user data into the database
$sql = "SELECT * FROM users";
$results = $connection->query($sql);

if($results->num_rows > 0){
while($row = $results->fetch_assoc()){
    echo "username:  " .$row["username"]. "<br>";
    echo "Email:  " .$row["email"]. "<br>";
    echo "Mosha:  " .$row["mosha"]. "<br>";
};

}

$connection->close();
?>