<?php
$fstyle=$_GET['fstyle'];
$fsize=$_GET['fsize'];
$fc=$_GET['fc'];
$bc=$_GET['bc'];
setcookie('fs',"$fstyle");
setcookie('fz',"$fsize");
setcookie('fc',"$fc");
setcookie('bc',"$bc");

?>

<form action=thirdpageE1AQ2.php>
Enter some text<input type=text name=st><br>
<input type=reset value=clear>
<input type=submit value=Submit>
</form>



