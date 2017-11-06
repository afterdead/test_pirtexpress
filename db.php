<?php
  $dbi = 'mysql:host=localhost;dbname=test_print';
  $pdo = new PDO($dbi, 'root', '1234');

  function sex($text){
    if($text == 'f'){
      $r = 'unknown';
      $r = 'Female';
    }
    if($text == 'm'){
      $r = 'male';
    }
    return $r;
  }

?>
