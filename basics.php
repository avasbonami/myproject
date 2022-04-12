<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <div class="Container">
        This is code; 
        <?php
        define('PI',3.14);
        echo"Hello";
        //single line comment
        /*multipe 
        line
        comment 
        */
        $variable1 = 2;
        $variable2 = 3;
        echo $variable1;
        echo $variable2;
        //Echo $variable1 + $variable2; 
        //*****Operators in PHP******/

        //Arithmetic Operators
        echo "<br>";
        echo "The valu of varriable1 + variable2 is";
        echo $variable3 = $variable1 + $variable2; 
        echo "<br>";
        //Assigment Operators 
        $newVar = $variable3;
        $newVar += 1;
        echo "The new variable is";
        echo $newVar;
        echo "<br>";
        //Comparison Operators 
        //echo "</h1> New line </h1>";
        echo"The value of 1==2 is ";
        echo var_dump(1==2);
        echo"<br>";
        //Increment/Decrement Operators
       //echo $variable3++;
        echo ++$variable3;
        echo"<br>";
        //echo $variable3;
        //Logical Operators
        //and (&&)
        //or (||)
        //not (!)
        //xor
        ?>
        <?php
        //Data type in PHP
        echo "<br>Data type <br>";
        $var = "This is string";
        var_dump($var);
        echo "<br>";
        $var = 7;
        var_dump($var);
        echo "<br>";
        $var = 7.6;
        var_dump($var);
        echo "<br>";
        $var = true;
        var_dump($var);
        echo "<br>";
        
        echo PI;
        ?>

    </div>
    
</body>
</html>