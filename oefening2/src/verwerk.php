<?php
require_once 'Util/Date.php';
use Util\Date;
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$date = Date::make($day, $month, $year);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
<h1><?php
    $date->printMonth();
    ?></h1>
</body>
</html>
