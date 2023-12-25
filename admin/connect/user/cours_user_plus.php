<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['CoursPlusUser'])){
        $UserID = $_GET['UserID'];
        $CoursID = $_POST['CoursID'];
        $days = $_POST['days'];
        $StatrData = date("Y-m-d");
        $endDate = date('Y-m-d', strtotime($StatrData .' '.$days.' day'));
        
        $sql = "INSERT INTO `user_cours`(`id`, `UserID`, `CoursID`, `Start`, `End`, `Text`) 
        VALUES (NULL,?,?,?,?,?)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$UserID, $CoursID, $StatrData, $endDate, "Meneger"]);
        header("location: ../../users_eye.php?UserID=".$UserID."");
    }
?>