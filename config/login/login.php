<?php
include("../confige.php");
include("../sms/sendSms.php");
if(isset($_POST['login'])){
    $phone = str_replace(" ","",$_POST['phone']);
    $sql = "SELECT * FROM `user` WHERE `Phone`='".$phone."'";
    $res = $conn->query($sql);
    $i=0;
    while ($row = $res->fetch()) {
        $i++;
    }
    if($i>0){
        $code = rand(100000, 999999);
        $text = "Tasdiqlash kodi: ".$code."\nATKO o‘quv markazi. Ma‘lumot uchun: 91 950 1101";
        sendMessge($phone,$text);
        setcookie("code", $code, time() + 300, '/');
        setcookie("phone", $phone, time() + 300, '/');
        echo "SEND MESSEGE";
        header("location: ../../login.php?code=true");
    }else{
        header("location: ../../login.php?reg=true");
    }
}else{
    header("location: ../../login.php");
}

?>