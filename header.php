<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>homepage</title>
</head>

<body>
    <header>
        <nav>
<?php
include "function.php";
$navItems = [
    "/"=>'kontaktid',
    "about.php"=>'about',
    "home.php"=>'avaleht'
];

print_nav($navItems);
?>

        </nav>
    </header>