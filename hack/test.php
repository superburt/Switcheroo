<?php 
$var =[];
$var = array(
    'test'=> 'value',
    'fail'=> 'bob'
);
$test=[];
$test = array(
    'test'=>'value',
    'fail'=> 'tom'
);


if ($var == $test){
    echo "worked";
} else{
    echo "failed";
}


?> 