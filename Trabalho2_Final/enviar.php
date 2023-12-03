
<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fenix";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn-> connect_error){
        die("conncection failed; ". $conn->connect_error);
    }
    $nome = $_POST['nome'];
    $email = $_POST['email'];

$sql = "INSERT INTO contato (nome, id, email)
        VALUES ('Juan Carlos', '2', 'carlosjuan76')";
if($conn->query($sql)==TRUE){
    echo "New Record Created Successfully";

}
$conn->close();
?>