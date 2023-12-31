<?php

$con = new mysqli('localhost','1415','1415@','crudoperation');

//if not connected, show me this error. 
if(!$con){   
    die(mysqli_error($con));
}


?>