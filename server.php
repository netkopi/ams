<?php
    include('utils/connect.php');

    $api_key = 'cdlb1994';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $apiKey = $_POST['apiKey'] ?? '';

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $query = $connection->query($sql);

    $response = array(
        'message' => $query->fetch_assoc() > 0
    );

    if($api_key == $apiKey){
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    else {
        header('HTTP/1.1 401 Unauthorized');
        echo json_encode('Unauthorized Access');
    }
    exit();
?>