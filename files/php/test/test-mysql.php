<?php
$server = "localhost";
$user = "root"
$pass = "pass"

$conn = new mysqli($server, $user, $pass);

if ($conn->connect_error) {
    die("Ошибка: " . $conn->connect_error);
}
else {
    echo "Подключение успешно установлено";
}


$sql = "select version()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        print_r($row);
    }
}
else {
    echo "0 results";
}

conn->close();
?>
