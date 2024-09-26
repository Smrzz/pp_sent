<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "reservations"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$phone = $_POST['phone'];
$room_type = $_POST['room_type'];


$sql = "INSERT INTO bookings (phone, room_type) VALUES ('$phone', '$room_type')";


if ($conn->query($sql) === TRUE) {
    echo "Заявка успешно отправлена!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
