<?php
if(isset($_REQUEST['message']) && !empty($_REQUEST['message']) && isset($_REQUEST['phone_number']) && !empty($_REQUEST['phone_number'])){
    session_start();
    $message = $_REQUEST['message'];
    $phone_number = $_REQUEST['phone_number'];
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
    $response = json_decode($response, true);
    $_SESSION["response"] = (isset($response['success']) != 'false' ?  'Mensaje enviado correctamente' : $response['error']);
    curl_close($ch);
    header('Location: index.php');
}else{
    echo '<script>alert("todo los campos son necesarios");</script>';
    header('Location: /');
}



?>