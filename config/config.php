<?php
//date_default_timezone_set("Asia/Kolkata");
//$con = mysql_connect("localhost", "root", "");
//$db = mysql_select_db("MESales", $con);

?>

<?php
date_default_timezone_set("Asia/Kolkata");
@$con = mysql_connect("localhost", "root", "");
$res = mysql_select_db("dnirma", $con);
?>