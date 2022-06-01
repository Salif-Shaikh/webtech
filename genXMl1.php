<?php
header('content-type:text/xml');
$b=array(1,'JAVA','Balguru Swami',250,2006,2,'C','Denis Ritchie',500,1971);
echo '<BookInfo>';
for($i=0;$i<count($b);$i+=5)
 {
echo '<book>';
echo '<bookno>'.$b[$i].'</bookno>';
echo '<bookname>'.$b[$i+1].'</bookname>';
echo '<authorname>'.$b[$i+2].'</authorname>';
echo '<price>'.$b[$i+3].'</price>';
echo '<year>'.$b[$i+4].'</year>';
echo '</book>';
 }
echo '</BookInfo>';
?>
