<?php
$identity = 'James Bond';
$car = 'BMW';
$sentence = "$identity drives a  $car";
//$sentence = '$identity drives a  $car';
echo $sentence;
echo "<br>";

$foo = "0";
$foo += 2;
$foo = $foo + 1.3;
$foo = 5 + "10 Piggies";
var_dump($foo);

$x = 2;
function myTest()
{
    echo "<p>Variable x inside function is:  $GLOBALS[x]  </p>";
}
myTest();
echo "<p>Variable x outside function is: $x </p>";

function KiemTraLaNguyenTo()
{
    $n = $GLOBALS['x'];
    $yes = "$n Là số nguyên tố";
    $no = "$n Không là số nguyên tố";

    if ($n < 2) {
        echo $no;
        return;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            echo $no;
            return;
        }
    }
    echo $yes;
}
KiemTraLaNguyenTo();


function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "<br>";

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo "<br>";
    if (empty($name)) {
        echo "Ho ten is empty";
    } else {
        echo $name;
    }
}

?>

<form method="post" action="/Bai1_Chia02/index.php">
    Name: <input type="text" name="name">
    <br><br>
    E-mail:
    <input type="text" name="email">
    <br><br>
    Website:
    <input type="text" name="website">
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <br><br>
    <input type="submit" name="submit" value="Submit">

</form>