<?php
session_start();
$_SESSION['eno']=$_GET['eno'];
$_SESSION['ename']=$_GET['ename'];
$_SESSION['add']=$_GET['add'];
?>

<form action=E1BQ2P3.php>
Basic:<input type=text name=basic><br>
DA:<input type=text name=da><br>
HRA:<input type=text name=hra><br>
<input type=reset value=clear>
<input type=submit value=Next>
</form>
