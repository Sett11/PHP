<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <?php
    $a=array(1,2,3,'4','5','6',7,null,true);
    foreach($a as $e) {
        if (is_numeric($e)){
            echo var_export($e, true) . " - number", PHP_EOL . "<br>";
        } else {
            echo var_export($e, true) . " - not number",PHP_EOL . "<br>";
        }
    }
    ?>
</body>
</html>