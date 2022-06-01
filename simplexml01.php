<?php
$xml=simplexml_load_file('book.xml') or die("Unable to open");
$aname="Denis Ritchie";
echo "<table border=1 width=70%>";
echo "<tr><th>book no</th><th>book name</th><th>authorname</th><th>price</th><th>Year</th></tr>";
foreach($xml->children() as $t)
{
 if($t->authorname==$aname)
{
 echo "<tr align=center>";
 echo "<td>".$t->bookno."</td>";
 echo "<td>".$t->bookname."</td>";
 echo "<td>".$t->authorname."</td>";
 echo "<td>".$t->price."</td>";
 echo "<td>".$t->year."</td>";
 echo "</tr>";
}

}
echo "</table>";
?>
