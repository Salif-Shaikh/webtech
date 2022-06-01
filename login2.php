<?php
session_start();
$_SESSION['nt']=$_SESSION['t']+20;
if(time()>$_SESSION['nt'])
echo "Session expired...";
else
{
echo "<br>R.No:".$_GET['rno'];
echo "<br>Name:".$_GET['name'];
}
?>
