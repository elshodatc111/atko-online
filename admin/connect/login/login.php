<?php
    session_start();
    include("../../../config/confige.php");
    if(isset($_POST['login'])){
        $username = str_replace("'","`",$_POST['username']);
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".$password."'";
        $res = $conn->query($sql);
        $count = $res->fetchColumn();
        if($count>0){
            $sql1 = "SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".$password."'";
            $res1 = $conn->query($sql1);
            $row1 = $res1->fetch();
            echo "ok";
            $_SESSION["UserID"] = $row1['username'];
            echo $_SESSION["UserID"];
            header("location: ../../index.php");
        }else{
            header("location: ../../login.php?err=true");
        }
    }else{
        header("location: ../../login.php");
    }
?>