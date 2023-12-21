<?php
    date_default_timezone_set("Asia/Samarkand");
    $servername = "localhost";
    $username = "atkouz_atko";
    $password = "Elshod1997/*";
    $dbname = "atkouz_online";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>