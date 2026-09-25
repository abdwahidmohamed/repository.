<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num = 12345789;
$reverse = 0;

while ($num > 0) {
    $digit = $num % 7;
    $reverse = ($reverse * 7) + $digit;
    $num = (int)($num / 7);
}

echo "Reverse = " . $reverse;

?>
</body>
</html>