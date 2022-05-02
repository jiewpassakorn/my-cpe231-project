<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    
<?php
    //This is single line comment
    #This is single line comment

    /*

        This is multiple line comment

    */
    /*
    echo "Hello my PHP!";
    echo "<br>";
    echo "Hello my PHP!";

    $color = "red";
    $Color = "green";
    echo "<br>";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $Color;
    */

    /*$name = "Passakorn";
    $age = 50;
    $my_weight = "53";

    echo "My name is $name my age is $age my weight is $my_weight"."<br>";
    echo "Hello ";
    ======================================================================
    $x = 5; //gobal scope

    function myfunc(){
        $x = 10; //local scope
        echo "Local output $x <br>";
    }

    myfunc();

    echo "Global output $x";
    ======================================================================
    */

    /*$x = 5;
    $y = 10;

    function test(){
        global $x,$y; #call global variable first
        $c = $x+$y;
        echo "x + y = $c";
    }

    test();
    */

    /*echo "Hello, PHP echo" . "Test1" ,"Test2"; #echo can have multiple parameter
    echo "<br>";
    print "Hello, PHP print";
    ======================================================================
    */
    
    /*
    #PHP Data Types
    -String = "Hello, World"
    -Integer = 1,2,3,4,5
    -Float = 3.14
    -Boolean = true, false
    -Array = array("BMW","Ford","Benz");
    -Object
    -NULL
    */

    /*$txt = "Hello , World";
    $int = 12345;

    var_dump($txt); #This function use for check Data Types
    var_dump($int);
    ======================================================================
    */

    /*class Car{
        function Car(){
            $this->model = "BMW";
        }
    }

    #create an object
    $myCar = new Car();

    // show object properties
    echo $myCar->model;

    ======================================================================
    */
    
    /*
    //define(name ,value, false);
    //constants are Global
    define("Greeting", "Welcome to Passakorn");

    //echo Greeting;

    function test(){
        echo Greeting , " in function";
    }
    test();
    */
    echo "Hello Passakorn";
?>

</body>
</html>