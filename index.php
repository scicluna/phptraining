<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP!!!</title>
</head>

<body>
    <?php
    $cars = [["Volvo", 26, 17], ["BMW", 15, 2]];

    for ($i = 0; $i < count($cars); $i++) {
        echo $cars["Volvo"];
    }


    ?>
</body>

</html>