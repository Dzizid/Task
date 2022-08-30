<?php

$conn = mysqli_connect("localhost", "root", "");

if ($conn === false) {
    die("Error" . mysqli_connect_error());
}

echo "Подключение успешно установленно";
mysqli_close($conn);

