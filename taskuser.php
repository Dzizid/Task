<?php

include "connect.php";

$sql = 'SELECT * FROM task_user';
    if($result = $conn->query($sql)) {
        foreach ($result as $row ) {
            $id = $row['id'];
            $email = $row['email'];
            $name = $row['name'];
            $month = $row['month'];
            $day = $row['day'];
        }
    }

