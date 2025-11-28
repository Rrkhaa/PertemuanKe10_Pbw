<?php
$db = new SQLite3(__DIR__ . '/database/database.sqlite');
$result = $db->querySingle("SELECT sql FROM sqlite_master WHERE type='table' AND name='authors';");
echo "Authors table schema:\n";
echo $result . "\n";

$result2 = $db->querySingle("PRAGMA table_info(authors);", true);
echo "\nPRAGMA table_info output:\n";
var_dump($result2);
