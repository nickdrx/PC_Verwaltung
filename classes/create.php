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

echo "Record is created!<br>";
echo "Prozessortakt in GHz:  " . $_POST['hdd'] . "<br>";
echo "Arbeitsspeicher in GB:  " . $_POST['takt'] . "<br>";
echo "Festplattenkapazität in GB: " . $_POST['ram'] . "<br>";

$hdd = $_POST['hdd'];
$takt = $_POST['takt'];
$ram = $_POST['ram'];
$statement  = $mysqli->prepare('INSERT INTO tblPCs (hdd, takt, ram) VALUES (?,?,?)');
$statement->bind_param('sss', $hdd, $takt, $ram);
$statement->execute();

if (!$statement) trigger_error("Update threw error!");

$statement->close();
$mysqli->close();