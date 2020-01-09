<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $str = $_GET["msg"];
  $toKey = $_GET["to"];
  $fromKey = $_GET["from"];

  $cleanStr = strip_tags($str);
  $cleanToKey = strtolower(preg_replace('/\s+/', '', strip_tags($toKey)));
  $cleanFromKey = strtolower(preg_replace('/\s+/', '', strip_tags($fromKey)));
  $cleanToKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanToKey);
  $cleanFromKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanFromKey);
  $cleanToKey = substr($cleanToKey,0,40);
  $cleanFromKey = substr($cleanFromKey,0,40);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include './inc_php/dbcred.php';
  include './config/app.php';

  $time = time();
  $str = $_POST["message"];
  $toKey = $_POST["tokey"];
  $fromKey = $_POST["fromkey"];

  $cleanStr = strip_tags($str);
  $cleanToKey = strtolower(preg_replace('/\s+/', '', strip_tags($toKey)));
  $cleanFromKey = strtolower(preg_replace('/\s+/', '', strip_tags($fromKey)));
  $cleanToKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanToKey);
  $cleanFromKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanFromKey);
  $cleanToKey = substr($cleanToKey,0,40);
  $cleanFromKey = substr($cleanFromKey,0,40);
  $saveDir = './posts/';

  $errorFlag = false;
  $errorMsg = '';
  $returnMsg = '';

  $response = array();

  $messageSha = sha1($cleanStr.$cleanToKey.$cleanFromKey);
  $filename = $messageSha . '.txt';

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    $errorFlag = true;
    $errorMsg = 'Server unavailable. Please try again';
  }

  $sql = "SELECT * FROM magicpost_main WHERE filedir LIKE '$messageSha'";
  $result = $conn->query($sql);

  if(empty($cleanStr) || empty($cleanToKey)){
    $errorMsg = 'Form is incomplete.';
    $errorFlag = true;
  }

  if ($result->num_rows > 0) {
    $errorMsg = 'A duplicate message exists. <a href="./search.php?search='.$messageSha.'" target="_blank" rel="noopener noreferrer nofollow">Click to view</a>';
    $errorFlag = true;
  }

  if(!$errorFlag && !preg_match('/^[0-9A-Fa-f]{40}.*/', $cleanFromKey)){
   $errorMsg = 'Your fingerprint is not valid.';
   $errorFlag = true;
  }

  if(!$errorFlag && !preg_match('/^[0-9A-Fa-f]{40}.*/', $cleanToKey)){
   $errorMsg = 'Recipient fingerprint is not valid.';
   $errorFlag = true;
  }

  if(!$errorFlag && strlen($cleanStr) > $filesizeLimit){
   $errorMsg = 'The message is over 5mb.';
   $errorFlag = true;
  }

  if(!$errorFlag && (!is_int(strpos($cleanStr,"-----BEGIN PGP MESSAGE-----")) || !is_int(strpos($cleanStr,"-----END PGP MESSAGE-----")))){
   $errorMsg = 'This is not a valid encrypted PGP message.';
   $errorFlag = true;
  }
}

?>
