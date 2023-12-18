<?php
    include("../../config/confige.php");
    if(isset($_POST['login'])){
        $username=str_replace("'","`",$_POST['username']);
        $password=$_POST['password'];
        echo md5($password);
        $sql10 = "SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".md5($password)."'";
        $res10 = $conn->query($sql10);
        $i=1;
        while ($row10 = $res10->fetch()) {
            $i++;
        }
        if($i>1){
            $sql1 = "SELECT * FROM `admin` WHERE `username`='".$username."' AND `password`='".md5($password)."'";
            $res1 = $conn->query($sql1);
            $row1 = $res1->fetch();
            $user_id = $row1['user_id'];
            setcookie($user_id, "user_id", time() + 3600, "/");
            header("location: ../index.php");
        }else{
            header("location: ../login.php?Error");
        }
    }else{
        header("location: ../login.php?Home");
    }
?>