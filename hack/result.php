<?php

include "form.php";
$postImg = [];
$postImg = array(
    'img1'=>"some url",
    'img2'=>"some url",

);



$postName = @$_GET['feedName'];
$postMsg = @$_GET['feedMsg'];
$postDate = @$_GET['feedDate'];


$campus = @$_GET['campus'];
$date = @$_GET['date'];
$greeting = @$_GET['greeting'];
$user = @$_GET['sNumber'];
$pw = @$_GET['password'];





$login = [];
$login = array(
    'sNumber' => $user,
    '&nbsp',
    '&nbsp',
    'password' => $pw

);

$run = login($login);


$booking = [];
$booking = array(
    'campus' => $campus,
    '&nbsp',
    'date' => $date,
    '&nbsp',
    'greeting' => $greeting
);

if (empty($login)){
    foreach($login as $logins){
        echo $logins;
    }

}
else if (!empty($booking)){
    foreach($booking as $bookings){
        echo $bookings;
        
    }

}




?>
