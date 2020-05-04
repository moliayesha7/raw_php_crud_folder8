<?php
require_once 'config.php';


//user name check function
function userNameCheck($username,$conn){


    $sql="SELECT * FROM users WHERE uname='$username'";

    $data=$conn -> query($sql);

   $num=$data -> num_rows;

    if($num > 0){
        return false;
    }else{
        return true;
    }
}

//email check function ckeck
function emailCheck($email,$conn){

$sql="SELECT * FROM users WHERE email='$email'";

$data=$conn -> query($sql);

$num=$data -> num_rows;

if($num >0){
    return false;
}else{
    return true;
}

}

?>