<?php
require_once 'vendor/autoload.php';
require_once 'config.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])){
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    //obtener información del perfil
    $goole_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email = $google_account_info->email;
    $name = $google_account_info->name;

    //datos que se obtendrán
    echo $email .'<br>';
    echo $name;
}
?>