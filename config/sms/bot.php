<?php
    $botToken="6917142963:AAFYIdT3j7e257CEspfTwQdAQLzQeqR0kgg";
    $name = $_POST['ISM'];
    $phone = $_POST['PHONE'];
    $email = "atko.uz";
    $text = $_POST['TEXT'];
    echo $name." ".$phone." ".$email." ".$text;
    
    $website="https://api.telegram.org/bot".$botToken;
    $chatId=952410592;  
    $chatId2=1363698146;
    $params=[
        'chat_id'=>$chatId, 
        'text'=>"ATKO o'quv markaziga web sayt orqali murojat \n 👤 Ism: ".$name."\n 📞 Tel: ".$phone."\n 📧 Email: ".$email."\n 📝 Matn: ".$text,
    ];
    $params2=[
        'chat_id'=>$chatId2, 
        'text'=>"ATKO o'quv markaziga web sayt orqali murojat \n 👤 Ism: ".$name."\n 📞 Tel: ".$phone."\n 📧 Email: ".$email."\n 📝 Matn: ".$text,
    ];
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $ch = curl_init($website . '/sendMessage');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ($params2));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    
    
    header("location: ../../index.php");
    
?>