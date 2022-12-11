<?php

session_start();
$role=$_SESSION["admin"];
if($role != 'ADMIN'){
    echo "You are not admin";
    die();
}