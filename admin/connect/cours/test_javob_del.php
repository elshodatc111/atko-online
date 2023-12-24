<?php
    session_start();
    include("../../../config/confige.php");
    $CoursID = $_GET['CoursID'];
    $MavzuID = $_GET['MavzuID'];
    $TestID = $_GET['TestID'];
    $JavobID = $_GET['JavobID'];
    $sql = "DELETE FROM `cours_test_javob` WHERE `JavobID`=? AND `TestID`=?";
    $stmt= $conn->prepare($sql);
    $stmt->execute([$JavobID, $TestID]);
    header("location: ../../cours_mavzu_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."");
?>