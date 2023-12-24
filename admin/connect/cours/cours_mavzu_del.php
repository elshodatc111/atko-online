<?php
    session_start();
    include("../../../config/confige.php");
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];
    $sql2 = "DELETE FROM `coues_mavzu` WHERE `CoursID`=? AND `MavzuID`=?";
    $stmt2= $conn->prepare($sql2);
    $stmt2->execute([$CoursID,$MavzuID]);
    header("location: ../../cours_eye.php?CoursID=".$_GET['CoursID']."");
?>