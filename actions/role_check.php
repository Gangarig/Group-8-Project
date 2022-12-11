<?php

session_start();
$role=$_SESSION["admin"];
if(!ISSET($role)){
    echo "You are not admin";
    die();
}