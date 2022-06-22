<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <h1>THis is my first php website</h1>
    

    <?php

echo "Hello world and this is printed using PHP";


  // Single line comment
        /*
            This
            is 
            a
            multi
            line
            comment
        */


        $variable1 = 5;
        $variable2 = 2;
        echo $variable1;
        echo $variable2;


        // Arithmetic Operators 
    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";


    // Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";


    // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;


      // Logical Operator
    // and (&&)
    // or (||)
    // xor 
    // !

    // $myVar = (true and true);
    // $myVar = (false and true);
    // $myVar = (false and false);
    // $myVar = (true and false);
    // $myVar = (true or false);

    // $myVar = (true xor true);
    // $myVar = (false and true);
    // $myVar = (false xor false);
    $myVar = (true and false);
    echo "<br>";
    echo var_dump($myVar);


    //constants
    defin('PI', 3.14);
    echo PI;

    // my Own practice 

echo "<br>";
$var="Thi sis String";
 echo "<br>";
 echo var_dump($var);

 echo "<br>";

 $arr=[2,3,4,"pinky"];
 echo var_dump($arr);


class SayHello{

    function Hello(){
        echo("Hello World");
    }
}
echo "<br>";

$obj=new SayHello;
$obj->Hello();// it prints o?p Hellow World
echo "<br>";

// echo $obj;
echo "<br>";

echo var_dump($obj); 

    ?>
</body>
</html>