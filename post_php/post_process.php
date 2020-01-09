<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!$errorFlag){
   $sql = "INSERT INTO magicpost_main (filedir, fromkey, tokey, time)
   VALUES ('$messageSha', '$cleanFromKey', '$cleanToKey', '$time')";
   if ($conn->query($sql) === TRUE) {
     file_put_contents(($saveDir.$filename),$cleanStr);
     $returnMsg = 'Message successfully posted. <a href="./search.php?search='.$messageSha.'" target="_blank" rel="noopener noreferrer nofollow">Click to view</a>';
   } else {
     $errorFlag = true;
     $errorMsg = 'Submission error. Please try again.';
   }
  }
  $conn->close();

  if($errorFlag){
    echo '<div class="lip error active"><span>'.$errorMsg.'</span><button class="lip-exit"><img src="./assets/img/exit.svg"></button></div>';
    $errorScript = '<script>';
    if(!empty($cleanStr)){
      $errorScript = $errorScript.' document.getElementById("message").value = decodeURIComponent("'.rawurlencode($cleanStr).'"); ';
    }
    if(!empty($cleanToKey)){
      $errorScript = $errorScript.' document.getElementById("tokey").value = decodeURIComponent("'.rawurlencode($cleanToKey).'"); ';
    }
    if(!empty($cleanFromKey)){
      $errorScript = $errorScript.' document.getElementById("fromkey").value = decodeURIComponent("'.rawurlencode($cleanFromKey).'"); ';
    }
    $errorScript = $errorScript.'</script>';
    if(strlen($errorScript) > 17){
      echo $errorScript;
    }
    //$response['errors']  = $errorMsg;
  } else {
    echo '<div class="lip success active"><span>'.$returnMsg.'</span><button class="lip-exit"><img src="./assets/img/exit.svg"></button></div>';
    //$response['success'] = $returnMsg;
    //$response['id'] = $messageSha;
  }
}


?>
