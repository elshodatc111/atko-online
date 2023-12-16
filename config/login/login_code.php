<?php
include("../confige.php");
if(isset($_POST['checkcode'])){
    if($_POST['code']===$_COOKIE['code']){
        $sql = "SELECT * FROM `user` WHERE `Phone`='".$_COOKIE['phone']."'";
        $res = $conn->query($sql);
        $i=0;
        while ($row = $res->fetch()) {
            $i++;
        }
        if($i>0){
            $sql1 = "SELECT * FROM `user` WHERE `Phone`='".$_COOKIE['phone']."'";
            $res1 = $conn->query($sql1);
            $row = $res1->fetch();
            setcookie("UserID", $row['UserID'], time() + 28000, '/');
            setcookie("code", $code, time() - 300, '/');
            setcookie("phone", $phone, time() - 300, '/');
            header("location: ../../kabinet.php");
        }else{
            setcookie("code", $code, time() - 300, '/');
            setcookie("phone", $phone, time() - 300, '/');
            header("location: ../../login.php");
        }
    }else{
        header("location: ../../login.php?code=true");
    }
}else{
    header("location: ../../login.php");
}
?>