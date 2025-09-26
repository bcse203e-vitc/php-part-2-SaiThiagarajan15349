<?php
date_default_timezone_set("Asia/Kolkata");  // set timezone

$filename = "data.txt";   // original file

if (file_exists($filename)) {
    
    $timestamp = date("Y-m-d_H-i");

    
    $nameOnly = pathinfo($filename, PATHINFO_FILENAME);

    
    $backupFile = $nameOnly . "_" . $timestamp . ".txt";

    
    if (copy($filename, $backupFile)) {
        echo "Backup created successfully: " . $backupFile;
    } else {
        echo "Error: Could not create backup.";
    }
} else {
    echo "Error: File '$filename' not found!";
}
?>

