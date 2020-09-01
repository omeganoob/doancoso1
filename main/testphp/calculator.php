<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = $_POST["x"];
        $b = $_POST["y"];
        $operator = $_POST["operator"];

        if($operator == "plus") {
            echo ($a + $b);
        }
        if($operator == "subtract") {
            echo ($a - $b);
        }
        if($operator == "multi") {
            echo ($a * $b);
        }
        if($operator == "divide") {
            echo ($a / $b);
        }
    ?>
</body>
</html>