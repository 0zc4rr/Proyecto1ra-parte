<?php

  require_once "C:/xampp/htdocs/Proyecto-camisetas/vendor/autoload.php";

  $clientID = '1081339157287-ugdmt5ahqr2akhmds24iu967864o8mml.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Proyecto-camisetas/sidebars/index.php';
  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");
 
 // Agregar los alcances necesarios
 
 $oauth2Service = new Google_Service_Oauth2($client);
 
 // Verificar si se está realizando una autenticación o se está mostrando el formulario
 if (isset($_GET['code'])) {
     // Si se ha recibido un código de autorización, procesarlo
     $client->authenticate($_GET['code']);
     $token = $client->getAccessToken();
 
     // Utilizar el token para obtener información del usuario
     $userInfo = $oauth2Service->userinfo->get();
     $userId = $userInfo->id;
     $userEmail = $userInfo->email;
     $userName = $userInfo->name;
 
     // Realizar acciones con la información del usuario (por ejemplo, registrar al usuario en tu aplicación)
 
     // Redirigir a la página de inicio de sesión o a donde sea necesario
     header('Location: http://localhost/Proyecto-camisetas/sidebars/index.php');
     exit;
 } else {
     // Si no se ha recibido un código de autorización, redirigir al usuario para autenticarse
     $authUrl = $client->createAuthUrl();
     header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
     exit;
 }
 
?>