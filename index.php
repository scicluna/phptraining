<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!!!</title>
</head>

<body>
    <?php
    define("GREETING", "Hello Boys!");
    define("BOYS", ["Bob", "Ricky", "BIG BOY"]);
    $text = "Yo wassup";
    $number = "52";
    echo min([2, 2, 3, 4, 5]);
    echo GREETING;
    foreach (BOYS as $boy) {
        echo $boy;
    }
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($age as $x => $val) {
        echo "$x = $val<br>";
    }
    echo str_replace("wassup", "bitch", $text);
    echo array_keys($age);

    ?>
</body>

</html>