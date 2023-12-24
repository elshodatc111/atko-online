<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['CoursPlus'])){
        $CoursID = time();
        $CoursName = str_replace("'","`",$_POST['CoursName']);
        $CoursQisqa = str_replace("'","`",$_POST['CoursQisqa']);
        $CoursPrase = $_POST['CoursPrase'];
        $CoursMavzu = str_replace("'","`",$_POST['CoursMavzu']);
        $CoursTil = str_replace("'","`",$_POST['CoursTil']);
        $CoursDavomiy = $_POST['CoursDavomiy'];
        $CoursMuddat = $_POST['CoursMuddat'];
        $CoursTech = str_replace("'","`",$_POST['CoursTech']);
        $About = str_replace("'","`",$_POST['About']);
        $CoursImage = "01.jpg";
        $TecherImage = "01.jpg";

        $sql = "INSERT INTO `cours`(`id`, `CoursID`, `CoursName`, `CoursText`, `CoursAbout`, `CoursPrice`, `CoursImage`, `CoursMavzu`, `CoursTil`, `CoursDavomiy`, `CoursTecher`, `TecherImage`, `Muddat`, `Data`) 
        VALUES (NULL,?,?,?,?,?,'01.jpg',?,?,?,?,'01.jpg',?,CURRENT_TIMESTAMP)";
        $stmt= $conn->prepare($sql);
        $stmt->execute([$CoursID, $CoursName, $CoursQisqa, $About, $CoursPrase, $CoursMavzu, $CoursTil, $CoursDavomiy, $CoursTech,$CoursMuddat]);
        header("location: ../../cours_eye.php?CoursID=".$CoursID."");



    }else{
        echo "Yangi kurs qo'shishda xatolik sodir bo'ldi qaytadan urinib ko'ring";
    }
?>