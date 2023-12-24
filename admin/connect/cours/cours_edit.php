<?php
    session_start();
    include("../../../config/confige.php");

    if(isset($_POST['CoursEdit'])){
        $CoursName = str_replace("'","`",$_POST['CoursName']);
        $CoursText = str_replace("'","`",$_POST['CoursText']);
        $CoursPrise = $_POST['CoursPrise'];
        $MavzuCount = $_POST['MavzuCount'];
        $KursTil = str_replace("'","`",$_POST['KursTil']);
        $KursDavom = $_POST['KursDavom'];
        $KursMuddat = $_POST['KursMuddat'];
        $Techer = str_replace("'","`",$_POST['Techer']);
        $KursAbout = str_replace("'","`",$_POST['KursAbout']);
        $CoursID = $_GET['CoursID'];

        $sql = "UPDATE `cours` SET `CoursName`=?,`CoursText`=?,`CoursAbout`=?,`CoursPrice`=?,`CoursMavzu`=?,`CoursTil`=?,`CoursDavomiy`=?,`CoursTecher`=?,`Muddat`=? WHERE `CoursID`=?";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$CoursName, $CoursText, $KursAbout, $CoursPrise, $MavzuCount, $KursTil, $KursDavom, $Techer, $ssss, $CoursID]);
        header("location: ../../cours_eye.php?CoursID=".$CoursID."");
    }else{
        echo "Malumotlar xato kiritildi";
    }
?>