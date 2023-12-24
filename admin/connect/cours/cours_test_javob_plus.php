<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['testjavobplus'])){
        $CoursID = $_GET['CoursID'];
        $MavzuID = $_GET['MavzuID'];
        $TestID = $_POST['TestID'];
        $JavobID = time();
        $Status = $_POST['Status'];
        $Javob = str_replace("'","`",$_POST['Javob']);
        $sql = "INSERT INTO `cours_test_javob`(`id`, `TestID`, `JavobID`, `Javob`, `Status`) VALUES (NULL,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$TestID, $JavobID, $Javob, $Status]);
        header("location: ../../cours_mavzu_eye.php?CoursID=".$_GET['CoursID']."&MavzuID=".$_GET['MavzuID']."");
    }else{
        echo "Yangi kurs qo'shishda xatolik sodir bo'ldi qaytadan urinib ko'ring";
    }
?>