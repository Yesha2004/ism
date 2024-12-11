<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $bus = $_POST['bus'];
    $date = $_POST['date'];

    $sql = "INSERT INTO bookings (name, bus, date) VALUES ('$name', '$bus', '$date')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
