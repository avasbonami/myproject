<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <title>PHP 2nd parts</title>
</head>
<style>
    .container
    {
    max-width: 80%;
    background-color: pink;
    margin: auto;
    padding: 20px;
    }
</style>
<body>
    <div class="container">
        <h1>Work Status</h1>
        <?php
            $time = 9;
            if ("time" < 9)
            {
                echo "Start Woring";
            }
            else 
            {
                echo "Stop Working ";
            }
            //Array in php 
            $languages = array("english","hindi","kanad","malyalam");
            echo count($languages);
            echo "<br>";
            echo $languages[1];
            //Loops in PHP 
            $a = 0;
            while($a <= 10)
            {
                echo "<br> The value of a is: ";
                echo $a;
                $a++;
            }
            //Iterating arrays in PHP using while loop  
            $a = 0;
            while($a < count($languages))
            {
                echo "<br> The value of a is: ";
                echo $languages[$a];
                $a++;
            }
            //Do while  loop  
            $a = 20;
            do
            {
                echo "<br> The value of a is: ";
                echo $a;
                $a++;
            }
            
            while($a <= 10);
        
            // For loop 
            for ($a=0; $a < 5; $a++) 
            { 
             echo "<br>The value of a from for loop is: ";
             echo $a;
            }
            foreach ($languages as $value ) 
            {
                echo "<br>The value of foreach loop is ";
                echo $value;
            }
            
        ?>
    </div>
</body>
</html>