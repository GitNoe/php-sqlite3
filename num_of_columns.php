<?php

$db = new SQLite3('database1.db');

$res = $db->query("SELECT * FROM cars WHERE id = 1");
$cols = $res->numColumns();

echo "There are {$cols} columns in the result set\n";