<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['TestPlus'])){
        $CoursID = $_GET['CoursID'];
        $MavzuID = $_GET['MavzuID'];
        $TestID = time();
        $Type = $_POST['Type'];
        $TestSavol = str_replace("'","`",$_POST['TestSavol']);
        $sql = "INSERT INTO `cours_test`(`id`, `CoursID`, `MavzuID`, `TestID`, `TestSavol`, `TestType`)
        VALUES (NULL,?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$CoursID, $MavzuID, $TestID, $TestSavol, $Type]);
        header("location: ../../cours_mavzu_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."");
    }else{
        echo "Yangi kurs qo'shishda xatolik sodir bo'ldi qaytadan urinib ko'ring";
    }
?>