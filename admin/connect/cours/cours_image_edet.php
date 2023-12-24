<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['EditImageCours'])){
        $CoursID = $_GET['CoursID'];
        $target_dir = "../../../img/kurs/";
        $target_file = $target_dir . basename(time().$_FILES["CoursImage"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        if ($_FILES["CoursImage"]["size"] > 5000000) {
            echo "Rasm hajmi 5MBdan katta kichikroq rasm yuklang.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            echo "Rasm faqat:  JPG, JPEG, PNG & GIF formatda bo'lsin.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Rasm yuklashda xatolik sodir bo'ldi qaytadan urinib ko'ring.";
        } else {
            if (move_uploaded_file($_FILES["CoursImage"]["tmp_name"], $target_file)) {
                $ImageName = htmlspecialchars( basename( time().$_FILES["CoursImage"]["name"]));
                $sql = "UPDATE `cours` SET `CoursImage`=? WHERE `CoursID`=?";
                $stmt= $conn->prepare($sql);
                $stmt->execute([$ImageName, $CoursID]);
                header("location: ../../cours_eye.php?CoursID=".$CoursID."");
            } else {
                echo "Rasm yuklashda xatolik sodir bo'ldi qaytadan urinib ko'ring.";
            }
        }
    }else{
        echo "Rasm yuklashda xatolik sodir bo'ldi qaytadan urinib ko'ring";
    }
?>