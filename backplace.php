<?php
include "config.inc.php";

$sql = "SELECT place_lon,place_lat FROM Online";
$result = mysql_query($sql); 
if($result === FALSE) {
	die(mysql_error()); // TODO: better error handling
}
$i=0;
while($row = mysql_fetch_array($result)) 
{
	$place[$i]['lat'] = $row['place_lat'];
	$place[$i]['lng'] = $row['place_lon'];
	++$i;
}
$string = '[';
for($a=0; $a<$i; $a++)
{
	if($a != 0){$string = $string.',';}
	$string = $string.'{"addr": ["'.$place[$a]['lat'].'", "'.$place[$a]['lng'].'"]}';
}
$string = $string.']';
echo $string;
//echo  '[{"addr": ["25.04380934412532", "121.55998706817627"]},{"addr": ["25.041904178378704", "121.55848503112793"]},{"addr": ["25.038521464229383", "121.55900001525879"]}
//]';
?>