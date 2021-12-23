<?php

$db = new SQLite3('database1.db');

$res = $db->query("SELECT * FROM cars");

$col1 = $res->columnName(1);
$col2 = $res->columnName(2);

$header = sprintf("%-10s %s\n", $col1, $col2);
echo $header;

while ($row = $res->fetchArray()) {

    $line = sprintf("%-10s %s\n", $row[1], $row[2]);
    echo $line;
}