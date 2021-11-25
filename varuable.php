<?php
    print("hello");
    print("<br>");
    print("hello");
    print("<br>");
    print("hello");
    print("<br>");
    echo("hello");
    print("<br>");
    $name = "wanlop";
    $age = 33;
    $relation = true;
    echo ($name);
    define("PROVINCE","Bangkok");
    print("<br>");
    echo PROVINCE;
    echo("<br>");
    define("SALARY",15000);
    echo SALARY;
    echo("<br>");
    $a=1;
    $b=1.0;
    
    if ($a === $b){
        echo ('true');
    }else{
        echo ('flase');
    }


    $t = date("H");
    echo($t);
    echo("<br>");
    if ($t < "10") {
        echo "Have a good morning!";
    }   elseif ($t < "20") {
        echo "Have a good day!";
    }   else {
        echo "Have a good night!";
    } 
?>

<!DOCTYPE html>
<html lang="en"> 
    <header>
        <!--Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </header>
    <body>
        <?php
            print("<h1>hello</h1>");
        ?>
    </body>
</html>