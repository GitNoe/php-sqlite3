<?php

$db = new SQLite3('database1.db');

$version = $db->querySingle('SELECT SQLITE_VERSION()');

echo $version . "\n";