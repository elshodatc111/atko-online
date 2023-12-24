<?php
    session_start();
    include("../../../config/confige.php");
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];
    $TestID = $_GET['TestID'];
    $sql = "DELETE FROM `cours_test_javob` WHERE `TestID`=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$TestID]);
    $sql2 = "DELETE FROM `cours_test` WHERE `TestID`=?";
    $stmt2= $conn->prepare($sql2);
    $stmt2->execute([$TestID]);
    header("location: ../../cours_mavzu_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."");
?>