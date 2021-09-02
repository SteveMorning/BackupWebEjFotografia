<?php

function url_get_contents ($Url, $data) {
    if (!function_exists('curl_init')){
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

$SECRET_KEY = "6Lc7PSsUAAAAAI8cjKvrybfT6GMgeK__ctZMIrim";

$EmailFrom = "info@festebanjuarezfotografia.com";
$EmailTo = "info@estebanjuarezfotografia.com";
$Subject = "Mensaje Vía Web";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$tel = Trim(stripslashes($_POST['tel']));
$message = Trim(stripslashes($_POST['message']));
$url = 'https://www.google.com/recaptcha/api/siteverify';

$data = array(
	'secret' => $SECRET_KEY,
  'response' => $_POST["g-recaptcha-response"]
);
$verify = url_get_contents($url, $data);

$captcha_success = json_decode($verify);

$validationOK = $captcha_success->success;

if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html#form1-4\">";
  exit;
}

// prepare email body text
$Body = "<b>Nombre: </b>" . $name . "<br /><br /><b>Tel: </b>" . $tel . "<br /><br /><b>Mensaje: </b><br /><br />" . $message;

$cabeceras = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabeceras .= "From: $name <$email>\r\n";
$cabeceras .= "Reply-To: $email <$email>\r\n";
$cabeceras .= "Return-Path: $email <$email>\r\n";
$cabeceras .= "X-Mailer: PHP/" . phpversion();

// send email 
$success = mail($EmailTo, $Subject, $Body, $cabeceras);

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thank-you.html#form1-4\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html#form1-4\">";
}
?>