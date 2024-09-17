<?php
$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];

foreach ($names as $name) {
    if ($name[0] === 'A') {
        continue;
    }
    echo strtolower($name) . '<br>';
}