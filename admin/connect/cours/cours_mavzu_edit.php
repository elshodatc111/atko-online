<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['MavzuVideoEdit'])){
        $Mavzu = str_replace("'","`",$_POST['Mavzu']);
        $MavzuAbout = str_replace("'","`",$_POST['MavzuAbout']);
        $MavzuTest = str_replace("'","`",$_POST['MavzuTest']);
        $MavzuNumber = $_POST['MavzuNumber'];
        $VideoLink = $_POST['VideoLink'];
        $VideoLine = $_POST['VideoLine'];
        $MavzuID = $_GET['MavzuID'];
        $CoursID = $_GET['CoursID'];
        $sql = "UPDATE `coues_mavzu` SET `MavzuName`=?,`MavzuAbout`=?,`MavzuLugat`=?,`Video`=?,`VideoLine`=?,`MavzuNumber`=? WHERE `CoursID`=? AND `MavzuID`=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$Mavzu, $MavzuAbout, $MavzuTest, $VideoLink, $VideoLine, $MavzuNumber, $CoursID, $MavzuID]);
        header("location: ../../cours_eye.php?CoursID=".$CoursID."");
    }else{
        echo "Mavzu yuklashda xatolik. Qaytadan urinib ko'ring";
    }


?>