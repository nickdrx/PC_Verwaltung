<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'pcverwaltung';
//Create Connection
$mysqli = mysqli_connect($host, $user, $password, $db);
if ( $mysqli )
{

}
else
{
    die('keine Verbindung möglich: ' . mysql_error());
}

echo "Record is Updated!<br>";
echo "ID:  " . $_POST['id'] . "<br>";
echo "Prozessortakt in GHz:  " . $_POST['hdd'] . "<br>";
echo "Arbeitsspeicher in GB:  " . $_POST['takt'] . "<br>";
echo "Festplattenkapazität in GB: " . $_POST['ram'] . "<br>";


$id = $_POST['id'];
$hdd = $_POST['hdd'];
$takt = $_POST['takt'];
$ram = $_POST['ram'];
$statement  = $mysqli->prepare('UPDATE tblPCs SET hdd=?,takt=?,ram=? WHERE id=?');
$statement->bind_param('sssi', $hdd, $takt, $ram, $id);
$statement->execute();

if (!$statement) trigger_error("Update threw error!");

$statement->close();
$mysqli->close();


?>

<html>
<br>
<a href="../index.php">Back to Site</a>
</html>