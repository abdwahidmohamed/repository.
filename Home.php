<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Examples 
    
    echo "Welcome to PHP";
    echo <br>
    echo ("Welcome to My Pro");
   echo <br>
    print ("Welcome to just Mr Abdiwahid");

    
//  Grad Marks
$mark = 85;

switch (true) {

    case ($mark >= 90):
        echo "Grade A+";
        break;

    case ($mark >= 80):
        echo "Grade A";
        break;

    case ($mark >= 70):
        echo "Grade B";
        break;

    case ($mark >= 60):
        echo "Grade C";
        break;

    case ($mark >= 50):
        echo "Grade D";
        break;

    default:
        echo "Grade F - Fail";
}

?>
</body>
</html>