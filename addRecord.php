<?php
if(isset($_POST['id_but'])){

    $mysqli = new mysqli("localhost", "root", "123", "test123");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }


    $filename= date("Y-m-d").".log";
    $date = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $current = file_get_contents($filename);
    $current .= $date." ". $ip." ". $_POST['id_but']."\n";
    file_put_contents($filename, $current);
    $id_but = $_POST['id_but'];
    $sql = "Insert into `test` (`user_id`,`datetime`,`id_but`) values ('$ip','$date','$id_but')";
    echo $sql;
    $mysqli->query($sql);
}