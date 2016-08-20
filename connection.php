<?php

$conn=mysql_connect("localhost","root","") or die();
$db=mysql_select_db("studyzone");

if($conn){
echo "yes";
}




?>