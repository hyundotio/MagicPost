<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $viewFile = $_GET["post"];
  $cleanViewFile = strtolower(preg_replace('/\s+/', '', strip_tags($viewFile)));
  $fileUrl = "./posts/".$cleanViewFile.".txt";
  if((preg_match('/^[0-9A-Fa-f].*/', $cleanViewFile)) && strLen($cleanViewFile) > 0 && file_exists($fileUrl)){
    $urlAdd = rawurlencode(file_get_contents($fileUrl));
    header("Location: https://app.magicpad.io/app/#!/page/read/".$urlAdd);
  } else {
    echo 'Post not found';
  }
  exit();
} else {
  exit();
}
?>
