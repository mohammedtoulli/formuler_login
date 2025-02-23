
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tabletest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("we9aa3e xikhataa " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name =  $_POST["nami"];
    $email = $_POST["email"];
    $phone = $_POST["number"] ;

  

    $sql = "INSERT INTO information (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "dakexi safi dekhal fi daba base ";
    } else {
        echo "sadi9i 3andek xi earror " . $conn->error;
    }
} else {
    echo "xi haja maxi hia hadik ";
}

$conn->close();
?>
