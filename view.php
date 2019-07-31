<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $viewFile = $_GET["post"];
  $cleanViewFile = strtolower(preg_replace('/\s+/', '', strip_tags($viewFile)));
  if((preg_match('/^[0-9A-Fa-f].*/', $cleanViewFile)) && strLen($cleanViewFile) > 0){
    echo '<style>body{font-family:monospace;}</style>';
    echo nl2br(file_get_contents("./posts/".$cleanViewFile.".txt"));
  } else {
    echo 'Post not found';
  }
}
?>
