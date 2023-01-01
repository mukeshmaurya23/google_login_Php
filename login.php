<?php

require_once './vendor/autoload.php';
error_reporting(E_ERROR | E_PARSE);

$clientID = 'your client id';
$clientSecret = 'client secret';
$redirectUri = 'http://localhost/GoogleLogin/login.php';

$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope('email');
$client->addScope('profile');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();

    $email = $google_account_info->email;
    $name = $google_account_info->name;
    $image = $google_account_info->picture;

    //match email with database and redirect to home page
    // if($email===$dbEmail){
    //     header("Location: home.php");
    // }
    // else{
    //     echo "Email not found in database";
    // }







    echo "welcome " . $name;
    echo "<br>";
    echo "your email is " . $email;
    echo "<br>";
    echo "<img src='" . $image . "'/>";
} else {
    $authUrl = $client->createAuthUrl();
    //google login button with style
    echo "<button><a href='" . $authUrl . "'>Login with Google</a></button>";
}
