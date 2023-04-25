<?php
session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
$_SESSION["groupe"] = "dev101";

print_r($_SESSION);

echo $_SESSION['groupe'];