<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment</title>
</head>
<body>
    <?php

echo "Odd numbers from 2 to 10:<br>";

for ($i = 2; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";

echo "Even numbers from 15 to 7:<br>";

for ($i = 15; $i >= 7; $i--) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

?>
</body>
</html>