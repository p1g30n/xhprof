<?php 
$_xhprof['dbhost'] = 'localhost';
$_xhprof['dbuser'] = 'root';
$_xhprof['dbpass'] = 'root';
$mysqli = new mysqli($_xhprof['dbhost'], $_xhprof['dbuser'], $_xhprof['dbpass'], 'xhprof');
mysqli_select_db($_xhprof['dbname']);
if ($mysqli->connect_errno) {
	echo $mysqli->connect_error;
}
if ($result = $mysqli->query("DELETE FROM details")) {
	echo "success";
}
else {
	echo $mysqli->error;
}
?>