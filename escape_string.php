<?php

$db = new SQLite3('database1.db');

$sql = "SELECT name FROM cars WHERE name = 'Audi'";

$escaped = SQLite3::escapeString($sql);

var_dump($sql);
var_dump($escaped);