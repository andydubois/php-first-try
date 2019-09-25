<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php echo "hello world";
function announce(){

    echo "<br />announce function";
}
$newValue=0;
function addinator($num1, $num2) {
    $value = $num1 + $num2;
    return $value;
}
$hello = "hello world variable";
$number = 4;

$testArray = ['andy', 'mike'];
$numArray = [1,2,3,4,5,6];
$testArray[2] = 'chris';
//creating multi-line strings
$my_string = <<<TEST
This is the first line
This is the second line
This is the third line
TEST;
//calling variable to show on DOM
echo $hello;
echo "<p>Hello world...AGAIN</p>";
echo "<p>hello world's</p>";
//my string variable
echo $my_string;
//announce function
announce();
//set new value to result of addinator of 1 and 2
$newValue = addinator(1,2);
//render variaable newValue
echo $newValue;
if ($newValue === 3) {
    echo "<p><br />YOU WIN A PRIZE</p>";
};
for ($i=0; $i < count($numArray); $i++) {
    if ($numArray[$i] % 2 === 0) {
        echo '<br /><p>This number is even:</p>';
        echo $numArray[$i];
    };
};

//render array
echo $testArray[0];
echo $testArray[1];
echo $testArray[2];
?>
<?php
class Car {
   function Car() {
       $this->model = "VW";
   }
}
// create an object
$herbie = new Car();
// show object properties
echo $herbie->model;
?>
</body>
</html>

