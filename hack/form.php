<?php

function booking($var){
    global $var; 
		if (!empty($var)) {
            echo $var;}
        else{
            echo "no Data";
        }    
    }  
    
    

function login($login){
    global $login;
	if (!empty($login)) {
        foreach($login as $logins){
            echo $logins;
        }
    
    }
    else{
        echo "no Data";
    }    
}  
    
?>