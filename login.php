<?php
session_start();
$_SESSION['t']=time();
?>
<form action=login2.php>
RNo:<input type=text name=rno><br>
Name:<input type=text name=name><br>
<input type=submit>
</form>
