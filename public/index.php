<?php
$DATABASE_HOST = '172.17.0.3';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'admin';
$DATABASE_NAME = 'liveidb';

$dbcon = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ($dbcon){
echo "connnected";
$name = "name";
$register = "INSERT into visitors SET Name='$name'";
	if (mysqli_query($dbcon, $register)) {
        	echo "inserted";
	}
        else {
                echo "not inserted";
        }
mysqli_close($dbcon);
}
else{
echo "not connected";
}
?>
