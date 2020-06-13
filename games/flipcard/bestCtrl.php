<?php
session_name("FTMG");
session_start();
header("Content-type: text/plain; charset=UTF-8");

if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    // Ajaxリクエストの場合のみ処理する

  if (isset($_POST['time'])){
    $postTime = $_POST['time'];
    echo '$_POSTでTimeが送られてきました。';

    if (isset($_SESSION["bestTime"])){
      $prevTime = $_SESSION["bestTime"];
      echo '$_SESSIONのbestTimeがありました。';
      print('session_id()は '.session_id().' です。<br>');

      if ($postTime < $prevTime){
        $_SESSION["bestTime"] = $postTime;
      }
    } else {
      $_SESSION["bestTime"] = $postTime;
      echo '$_SESSIONのbestTimeがなかったです。';
    }
    //echo "dataが送られてきました";

  } else {
    //echo "no data";
  }
}
?>