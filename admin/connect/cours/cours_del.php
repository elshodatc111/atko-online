<?php
    session_start();
    include("../../../config/confige.php");
    $CoursID = $_GET['CoursID'];
    $sql2 = "DELETE FROM `cours` WHERE `CoursID`=?";
    $stmt2= $conn->prepare($sql2);
    $stmt2->execute([$CoursID]);
    header("location: ../../cours.php");
?>