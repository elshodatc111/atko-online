<?php

include("./config/confige.php");
$token = "#############";
$merchant_id = "####;";

if (!isset($_POST['transaction_id'])){
    $inputData = file_get_contents("php://input");
    $parsedData = json_decode($inputData, true);
    if ($parsedData AND $parsedData['transaction_id'])
        $_POST = $parsedData;
}


////////////////CURL
function curl_post($url,$data){
    global $token;
    // Инициализация cURL-сессии
    $ch = curl_init($url);
    // Установка параметров cURL
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Accept: application/json",
        "Content-Type: application/json",
        "token: {$token}"
    ]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Выполнение запроса
    $response = curl_exec($ch);
    // Закрытие cURL-сессии
    curl_close($ch);

    if ($response === false) //curl_error($ch);
        exit("ERROR");

    return json_decode($response, true);
}


////////////////UPDATE TRANSACTION
function update_transaction($id, $status){
    global $conn;

    $update_response = $conn->query("UPDATE `transactions` SET `Status` = '{$status}', `UpdateDate` = CURRENT_TIMESTAMP WHERE `transactions`.`TransactionID` = {$id};");
    if ($update_response){
        $response = $conn->query("SELECT * FROM `transactions` WHERE `TransactionID` = {$id};");
        $transaction = $response->fetch(PDO::FETCH_ASSOC);
        if ($transaction['Status'] == 2){
            $course = $conn->query("SELECT * FROM `cours` WHERE `CoursID` = {$transaction['CourseID']};");
            $course_response  = $course->fetch(PDO::FETCH_ASSOC);

            $user_course_data = [
                $transaction['UserID'],
                $transaction['CourseID'],
                'CURRENT_TIMESTAMP',
                "'".date("Y-m-d H:i:s", strtotime(date("Y-m-d") . " + {$course_response['Muddat']} days"))."'",
                "'Paid'"
            ];
            $response_user_course = $conn->query("INSERT INTO `user_cours` (`UserID`, `CoursID`, `Start`, `End`, `Text`) VALUES (".implode(', ', $user_course_data).");");
            if ($response_user_course)
                return true;
        }
    }
}

// 0 initialization
// 1 waiting
// 2 paid
// 3 canceled
// 4 error
$all_status = [
    'REGISTRED' => 1,
    'ON_PROGRESS' => 1,
    'PAID' => 2,
    'RETURNED' => 3,
    'DECLINED' => 4,
    'PAY_ERROR' => 4,
    'EXPIRED' => 4,
];



////////////////CREATE TRANSACTION
if (isset($_GET['CoursID']) AND isset($_GET['oson'])){
    $course_response = $conn->query("SELECT * FROM `cours` WHERE `CoursID`={$_GET['CoursID']};");
    $course_data = $course_response->fetch(PDO::FETCH_ASSOC);
    if ($course_data){
        $transaction_id = (string)intval(time()+1);
        $data = [
            "merchant_id" => $merchant_id,
            "transaction_id" => $transaction_id,
            "user_account" => $transaction_id,
            "amount" => $course_data['CoursPrice'],
            "currency" => "UZS",
            "comment" => "ATKO O'nlayn kurs: {$course_data['CoursName']}",
            "return_url" => "https://atko.tech/pay_oson.php?tr_id=".$transaction_id,
            "lifetime" => 30,
            "lang" => "uz"
        ];
        $response = curl_post("https://api.oson.uz/api/invoice/create", $data);

        $transaction_status = isset($all_status[$response['status']]) ? $all_status[$response['status']] : 0;
        $transaction_data = [
            $response['transaction_id'],        //TransactionID
            $course_data['CoursID'],            //CourseID
            $_COOKIE['UserID'],                 //UserID
            $course_data['CoursPrice'],         //CoursPrice
            $transaction_status,                //Status
            'CURRENT_TIMESTAMP',                //UpdateDate
            'CURRENT_TIMESTAMP',                //CreatedDate
        ];
        $transaction_response = $conn->query("INSERT INTO transactions (TransactionID, CourseID, UserID, CoursPrice, Status, UpdateDate, CreatedDate) 
                                                        VALUES (".implode(', ', $transaction_data).");");
        if ($transaction_response){
            header("Location: {$response['pay_url']}");
            exit();
        }

    }

    header('Location: /');
    exit();
}



////////////////CHECK TRANSACTION
if (isset($_GET['tr_id'])){
    $transaction_id = $_GET['tr_id'];
    $transaction_query = "SELECT * FROM `transactions` WHERE `TransactionID`={$transaction_id};";
    $transaction_response = $conn->query($transaction_query);
    $transaction_data = $transaction_response->fetch(PDO::FETCH_ASSOC);

    if (isset($transaction_data['TransactionID'])){
        $response = curl_post("https://api.oson.uz/api/invoice/status", ["merchant_id"=> $merchant_id, "transaction_id"=> $transaction_id]);
        $transaction_status = isset($all_status[$response['status']]) ? $all_status[$response['status']] : 0;
        update_transaction($transaction_id, $transaction_status);
    }

    header('Location: https://atko.tech/kabinet.php');
    exit();
}



////////////////Request from oson
if (isset($_POST['transaction_id'])){
    $transaction_id = $_POST['transaction_id'];
    $transaction_status = isset($all_status[$_POST['status']]) ? $all_status[$_POST['status']] : 0;
    $signature = hash('sha256',
        hash('sha256',
            "{$token}:{$merchant_id}").":{$_POST['transaction_id']}:{$_POST['bill_id']}:{$_POST['status']}");
    if ($signature === $_POST['signature']){
        update_transaction($transaction_id, $transaction_status);
        http_response_code(204);
        exit();
    }
}

header("Location: /");
exit();

