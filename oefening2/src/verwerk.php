<?php
require_once 'Util/Date.php';

use Util\Date;

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$errorOutput = "";
try {
    $date = Date::make($day, $month, $year);
} catch (\Util\DateException $exception) {
    $date = null;
    $errorOutput = $exception->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verwerk</title>
</head>
<body>
<h1><?php
    if ($date) {
        $date->printMonth();
    }
    ?></h1>
<h2><?php print $errorOutput ?></h2>
</body>
</html>
