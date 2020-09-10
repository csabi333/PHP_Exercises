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

    $phrase = "Giraffe Academy<br>"; //string
    //$age = 30; //number, integer
    $float = 3.7; //decimal
    //difference between 30 and 30.0
    $bool = true;

    echo $phrase;
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase);
    echo "<br>";
    echo $phrase[0];
    $phrase[0]="B";
    echo "<br>";
    echo str_replace("Biraffe","Panda",$phrase);
    echo substr($phrase,8,3);    
    echo "<br>";
    echo "<br>";

    echo -40.435;
    echo "<br>";
    echo 5+9;
    echo "<br>";
    echo 10 % 3;//mod
    echo "<br>";
    echo 4+ 5*10; // normal operation rules
    echo "<br>";
    $num = 10;
    $num++;
    echo $num;
    echo "<br>";
    $num--;
    echo $num;
    $num+=25;
    //  -= /= *=
    echo "<br>";
    echo abs(-4235);
    echo "<br>";
    echo pow(2,4);//two to the power four
    echo "<br>";
    echo max(2,10);//min
    echo "<br>";
    echo round(3.2);
    echo "<br>";
    echo ceil(3.1); //always rounds up; floor
    echo "<br>";



    ?> 

    <form action="site.php" method="get">
        Name:<input type="text" name="Username">
        Age:<input type="number" name="age">
        <input type="submit">
    </form> 
    Your name is: 
    <?php
    echo $_GET["Username"];
    echo $_GET["age"];
    ?>  

<br>
add these two: <br>
<form action="site.php" method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2">
        <input type="submit">
    </form> 
Answer:
    <?php 
    echo $_GET["num1"] + $_GET["num2"];
    ?>
 <br>
   <br>
    <?php 
    
    $color =$_GET["color"];
    $pluralNoun =$_GET["pluralNoun"];
    $celebrity =$_GET["celebrity"];

    echo "Roses are $color ";
    echo "$pluralNoun are blue ";
    echo "I love $celeblity ";

    ?>
   <br>
   <br>
    <form action="site.php" method="get">
        Color:<input type="text" name="color">
        Plural noun:<input type="text" name="pluralNoun">
        Celeb:<input type="text" name="celebrity">
        <input type="submit">
    </form> 

    <br>
    <br>
    
    <form action="site.php" method="post">
        Password:<input type="password" name="password">
        
        <input type="submit">
    </form> 
    <?php 
    echo $_POST["password"];?>

    <br>
    <br>
    <br>

    <?php 
    $friends = array("kevin","karen","oscar","jim");
    echo $friends[0];
    $friends[1]="NEw friend";
    $friends[4]="anotha one";
    echo count($friends);
    ?>


</body>
</html>