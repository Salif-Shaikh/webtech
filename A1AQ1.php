<!--
 Write a PHP script to keep track of number of times the web page has been access.
-->
<?php
// check if the cookie exists
if(isset($_COOKIE["cnt"]))
{
 $cnt=$_COOKIE['cnt']+1;
 setcookie('cnt',$cnt);
 echo "Welcome Back Accessing $cnt times";
}
else
{
 echo "Welcome...";
 setcookie('cnt','1');
}
?>

