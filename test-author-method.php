<?php
require __DIR__ . '/vendor/autoload.php';
$app = require __DIR__ . '/bootstrap/app.php';

$author = \App\Models\Author::first();
if ($author) {
    echo "Author class: " . get_class($author) . "\n";
    echo "Has books method: " . (method_exists($author, 'books') ? 'YES' : 'NO') . "\n";
    echo "Methods: " . implode(", ", array_filter(get_class_methods($author), fn($m) => str_contains($m, 'book'))) . "\n";
} else {
    echo "No authors found\n";
}
