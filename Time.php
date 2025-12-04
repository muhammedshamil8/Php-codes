<?php

date default timezone set("Asia/Kolkata"); // Set your correct time zone

$last visit isset($_COOKIE['last visit']) ? $ COOKIE['last visit']: "First time visiting!"; setcookie ("last_visit", date("d/m/Y H:i:s"), time()+86400); // Cookie expires in 1 day 3>

<!DOCTYPE html>

<html>

<head>

<title>Last Visit</title>

</head>

<body>

<h2>Last Visited: <?= htmlspecialchars($last_visit) ?></h2>

</body>

</html>
