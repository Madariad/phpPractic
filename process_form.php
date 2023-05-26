<?php
$severname = "localhost";
$username = "root";
$password = "root";
$database = "node";

$connection = new mysqli($severname, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Получаем данные из формы
$artist = $_POST['artist'];
$location = $_POST['location'];

// Подготавливаем и выполняем запрос для добавления новой записи в базу данных
$query = "INSERT INTO concerts (artist, location_id) VALUES ('$artist', '$location')";

if ($connection->query($query) === TRUE) {
    echo "New record added successfully";
} else {
    echo "Error: " . $query . "<br>" . $connection->error;
}

$connection->close();
?>
