<?php
    include("../confige.php");
    include("../sms/sendSms.php");
    if(isset($_POST['reg'])){
        $phone = str_replace(" ","",$_POST['phone']);
        $fio = str_replace("'","`",$_POST['fio']);
        $sql = "SELECT * FROM `user` WHERE `Phone`='".$phone."'";
        $res = $conn->query($sql);
        $i=0;
        while ($row=$res->fetch()) {
            $i++;
        }
        if($i>0){
            header("Location: ../../login.php");
        }else{
            $code = rand(100000, 999999);
            $text = "Tasdiqlash kodi: ".$code;
            sendMessge($phone,$text);
            setcookie("code", $code, time() + 300, '/');
            setcookie("phone", $phone, time() + 300, '/');
            setcookie("name", $fio, time() + 300, '/');
            header("location: ../../reg.php?code=true");
        }
    }else{
        header("location: ../../reg.php");
    }
?>