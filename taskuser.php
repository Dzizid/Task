<?php

/*
if (isset($_GET["id"])) {
    $user_id = $conn->real_escape_string($_GET["id"]);
    $user_email = $conn->real_escape_string($_GET["email"]);
    $user_name = $conn->real_escape_string($_GET["name"]);
    $user_month = $conn->real_escape_string($_GET["month"]);
    $user_day = $conn->real_escape_string($_GET["day"]);


    $sql = "SELECT * FROM task_user WHERE id = '$user_id'";

    if ($result = $conn -> query($sql)){
        if ($result -> num_rows > 0) {
            foreach ($result as $row){
                $user_id = $row['id'];
                echo "<div>$user_id</div>";
            }
        }
    }
}
*/