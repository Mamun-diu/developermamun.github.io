<?php
  if(isset($_REQUEST['send-mail'])){
    $sub = $_REQUEST['subject'];
    $email = $_REQUEST['email'];
    $mess = $_REQUEST['message'];

    $from = $email;
    $to = "mamun511510782@gmail.com";

    $subject = $sub;
    $message = $mess;
    $headers = "From: . $from";

    mail($to,$subject,$message, $headers);
    header("Location: https://mamun-diu.github.io/portfolio/");
  }

?>
