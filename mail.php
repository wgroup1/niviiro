<?php

$mailTo="contact@niviiro.com";
$subject="hello";
$message="hello doll how are you";
$header="From: ring11tone@gmail.com"



if(mail($mailTo,$subject,$message,$header)){
    echo "sent";}
    else {
echo "not sent";
    }
}