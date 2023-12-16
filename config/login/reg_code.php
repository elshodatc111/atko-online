<?php
include("../confige.php");
if(isset($_POST['regcode'])){
    $codess = str_replace(" ","",$_POST['codes']);
    if($_COOKIE['code']===$codess){
        echo $_COOKIE['phone']." ".$_COOKIE['name'];
        $UserID = time();
        $sql2 = "INSERT INTO `user`(`id`, `UserID`, `FIO`, `Phone`, `Data`, `HoverData`)
        VALUES (NULL,?,?,?,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP)";
        $stmt= $conn->prepare($sql2);
        $stmt->execute([$UserID, $_COOKIE['name'], $_COOKIE['phone']]);
        setcookie("UserID", $UserID, time() + 28000, '/');
        header("location: ../../kabinet.php");
    }else{
        header("location:../../reg.php?err=true");
    }
}else{
    header("location:../../reg.php");
}
?>