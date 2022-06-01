<?php
$name=$_GET['n'];
setcookie('name',$name,time()+30);
echo "Your name $name";
?>
