<?php
include 'header.php';
$array = [
    'Avaleht',
    'Kontaktid',
    'Meist'
];

foreach ($array as $value) {
    echo '<span class="nav-item">' . $value . '</span>';
}

include 'footer.php';
