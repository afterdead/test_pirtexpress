<?php
  include('db.php');

  $allows = ['fullname', 'age', 'salary', 'sex'];
  $pass = true;

  foreach($allows AS $v){
    if(empty($_GET[$v])){
      $pass = false;
      $msg[] = $v.' is empty please fill it.';
    }else{
      $arr[':'.$v] = $_GET[$v];
    }
  }

  if($pass){

    $sql = "INSERT INTO `members` (`fullname`, `sex`, `salary`, `age`) VALUES (:fullname, :sex, :salary, :age);";
    $q = $pdo->prepare($sql);
    $q->execute($arr);
    $msg[] = 'insert done.';
  }

  echo json_encode([
    'pass' => $pass,
    'msg' => $msg
  ]);
