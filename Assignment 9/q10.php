<?php
$lines = file("students.txt", FILE_IGNORE_NEW_LINES);
$errorFile = "errors.log";
$validRecords = [];

foreach ($lines as $line) {
    $parts = explode(",", $line);
    if (count($parts) != 3) {
        file_put_contents($errorFile, "$line - Invalid format\n", FILE_APPEND);
        continue;
    }

    list($name, $email, $dob) = $parts;

    if (!preg_match("/^[\w\.-]+@[\w\.-]+\.\w+$/", $email)) {
        file_put_contents($errorFile, "$line - Invalid email\n", FILE_APPEND);
        continue;
    }

    $age = (new DateTime($dob))->diff(new DateTime())->y;
    $validRecords[] = [$name, $email, $age];
}


echo "<h3>Valid Student Records</h3>";
echo "<table border='1' cellpadding='5'>
<tr><th>Name</th><th>Email</th><th>Age</th></tr>";

foreach ($validRecords as $record) {
    echo "<tr><td>{$record[0]}</td><td>{$record[1]}</td><td>{$record[2]}</td></tr>";
}
echo "</table>";
?>

