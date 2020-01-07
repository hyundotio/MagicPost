<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include './inc_php/dbcred.php';

  $time = time();
  $str = $_POST["message"];
  $toKey = $_POST["tokey"];
  $fromKey = $_POST["fromkey"];

  $cleanStr = strip_tags($str);
  $cleanToKey = strtolower(preg_replace('/\s+/', '', strip_tags($toKey)));
  $cleanFromKey = strtolower(preg_replace('/\s+/', '', strip_tags($fromKey)));
  $cleanToKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanToKey);
  $cleanFromKey = preg_replace('/[^A-fa-f0-9\-]/', '', $cleanFromKey);
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
    $errorMsg = 'A duplicate message exists. <a href="./search.php?search='.$messageSha.'">Click to view</a>';
    $errorFlag = true;
  }

  if(!$errorFlag && !preg_match('/^[0-9A-Fa-f]{40}.*/', $cleanToKey)){
   $errorMsg = 'Recipient fingerprint is not valid.';
   $errorFlag = true;
  }

  if(!$errorFlag && !preg_match('/^[0-9A-Fa-f]{40}.*/', $cleanFromKey)){
   $errorMsg = 'Your fingerprint is not valid.';
   $errorFlag = true;
  }

  if(!$errorFlag && strlen($cleanStr) > 5000000){
   $errorMsg = 'The message is over 5mb.';
   $errorFlag = true;
  }

  if(!$errorFlag && (!is_int(strpos($cleanStr,"-----BEGIN PGP MESSAGE-----")) || !is_int(strpos($cleanStr,"-----END PGP MESSAGE-----")))){
   $errorMsg = 'This is not a valid encrypted PGP message.';
   $errorFlag = true;
  }

  if(!$errorFlag){
   $sql = "INSERT INTO magicpost_main (filedir, fromkey, tokey, time)
   VALUES ('$messageSha', '$cleanFromKey', '$cleanToKey', '$time')";
   if ($conn->query($sql) === TRUE) {
     file_put_contents(($saveDir.$filename),$cleanStr);
     $returnMsg = 'Message successfully posted. <a href="./search.php?search='.$messageSha.'">Click to view</a>';
   } else {
     $errorFlag = true;
     $errorMsg = 'Submission error. Please try again.';
   }
  }
  $conn->close();

  if($errorFlag){
    echo '<div class="lip error active"><span>'.$errorMsg.'</span><button class="lip-exit"><img src="./assets/img/exit.svg"></button></div>';
    //$response['errors']  = $errorMsg;
  } else {
    echo '<div class="lip success active"><span>'.$returnMsg.'</span><button class="lip-exit"><img src="./assets/img/exit.svg"></button></div>';
    //$response['success'] = $returnMsg;
    //$response['id'] = $messageSha;
  }
}

?>
