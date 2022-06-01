<!--
 Write a PHP script to keep track of number of times the web page has been access.
-->
<?php
session_start();
if(isset($_SESSION["cnt"]))
{
 $cnt=$_SESSION['cnt']+1;
 $_SESSION['cnt']=$cnt;
 echo "Welcome Back Accessing $cnt times";
}
else
{
 echo "Welcome...";
 $_SESSION['cnt']=1;
}
echo "<br>Session ID:".session_id();
?>

