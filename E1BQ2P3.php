<?php
session_start();
$_SESSION['basic']=$_GET['basic'];
$_SESSION['da']=$_GET['da'];
$_SESSION['hra']=$_GET['hra'];
$tsal=$_SESSION['basic']+$_SESSION['da']+$_SESSION['hra'];
echo "<br>***Employee Details***<br>";
echo "<br>Employee No.:".$_SESSION['eno'];
echo "<br>Employee Name:".$_SESSION['ename'];
echo "<br>Employee Address:".$_SESSION['add'];
echo "<br>Employee Basic:".$_SESSION['basic'];
echo "<br>Employee DA:".$_SESSION['da'];
echo "<br>Employee HRA:".$_SESSION['hra'];
echo "<br>Total Salary:".$tsal;
session_unset ();
session_destroy();
echo "<br>Employee No.:".$_SESSION['eno'];
echo "<br>Employee Name:".$_SESSION['ename'];
echo "<br>Employee Address:".$_SESSION['add'];
echo "<br>Employee Basic:".$_SESSION['basic'];
echo "<br>Employee DA:".$_SESSION['da'];
echo "<br>Employee HRA:".$_SESSION['hra'];
echo "<br>Total Salary:".$tsal;

?>


