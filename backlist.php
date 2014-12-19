<?php
include "config.inc.php";

$sql = "SELECT song,url FROM Online";
$result = mysql_query($sql); 
if($result === FALSE) {
	die(mysql_error()); // TODO: better error handling
}
$i=0;
while($row = mysql_fetch_array($result)) 
{
	$list[$i]['l_song'] = $row['song'];
	$list[$i]['l_url'] = $row['url'];
	++$i;
}
echo "<table><tr><td>Songs</td></tr>";
for($a=0; $a<$i; $a++)
{
	echo '<tr><td><a href="'.$list[$a]['l_url'].'" target="_blank">'.$list[$a]['l_song'].'</td></tr>';
}
echo "</table>";
?>