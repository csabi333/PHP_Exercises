<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $characterName = "John";
    $characterAge = 70;
    echo("there once was a man name $characterName<br>");
    echo("he was $characterAge<br>");
    $characterName ="Terry";
    echo("he liked the name $characterName<br>");
    echo("he didnt like being $characterAge<br>");

    $phrase = "To be or not to be<br>"; //string
    $age = 30; //number, integer
    $float = 3.7; //decimal
    //difference between 30 and 30.0
    $bool = true;
    echo $phrase;
    ?>
</body>
</html>