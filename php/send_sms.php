<?php

if(isset($_POST['message']) && !empty($_POST['message']) && isset($_POST['phone_number']) && !empty($_POST['phone_number'])){

    $message = $_POST['message'];
    $phone_number = $_POST['phone_number'];
    $key = "textbelt";
    $uri = "https://textbelt.com/text";

    $ch = curl_init($uri);
    $data = array(
        'phone' => $phone_number,
        'message' => $message,
        'key' => $key,
    );

    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    print_r($response);
    curl_close($ch);
}else{
    return false;
}



?>