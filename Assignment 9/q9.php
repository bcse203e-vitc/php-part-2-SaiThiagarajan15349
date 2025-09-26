<?php
$filename = "data.txt";
if (file_exists($filename)) {
    $timestamp = date("Y-m-d_H-i");
    $backup = pathinfo($filename, PATHINFO_FILENAME) . "_$timestamp.txt";
    copy($filename, $backup);
    echo "Backup created: $backup";
} else {
    echo "File not found!";
}
?>

