<html>
    <head>

    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            Enter Number 1: <input type="text" name="n1" value="<?php if (isset($_GET['n1'])) echo $_GET['n1'] ?>"><br>
            Enter Number 2: <input type="text" name="n2" value="<?php if (isset($_GET['n2'])) echo $_GET['n2'] ?>"><br>
            <input type="reset" value="clear">
            <input type="submit" value="sub" name="sub">
        </form>
    </body>
</html>


<?php
if(isset($_GET['sub']))
{
$n1=$_GET['n1'];
$n2=$_GET['n2'];;
$r=$n1-$n2;
EcHo "**********Substraction of $n1 and $n2 is $r**********";
}
?>


