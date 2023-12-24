<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['MavzuPlus'])){
        $Mavzu = str_replace("'","`",$_POST['Mavzu']);
        $MavzuAbout = str_replace("'","`",$_POST['MavzuAbout']);
        $MavzuTest = str_replace("'","`",$_POST['MavzuTest']);
        $MavzuNumber = $_POST['MavzuNumber'];
        $VideoLink = $_POST['VideoLink'];
        $VideoLine = $_POST['VideoLine'];
        $MavzuID = time();
        $CoursID = $_GET['CoursID'];
        $sql = "INSERT INTO `coues_mavzu`(`id`, `CoursID`, `MavzuID`, `MavzuName`, `MavzuAbout`, `MavzuLugat`, `Video`, `VideoLine`, `MavzuNumber`, `Name1`, `Name2`, `Data`) VALUES 
        (NULL,?,?,?,?,?,?,?,?,'','',CURRENT_TIMESTAMP)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$CoursID, $MavzuID, $Mavzu, $MavzuAbout, $MavzuTest, $VideoLink, $VideoLine, $MavzuNumber]);
        header("location: ../../cours_eye.php?CoursID=".$CoursID."");
    }else{
        echo "Mavzu yuklashda xatolik. Qaytadan urinib ko'ring";
    }


?>