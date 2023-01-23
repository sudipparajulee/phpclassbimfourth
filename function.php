<?php
function myfunction($val)
{
    echo 'This is inside function';
    echo '<br>';
    echo "The faculty is $val";
}

function mySum($num1, $num2)
{
    return $num1+$num2;
}

echo 'we are learning function';
echo '<br>';
// $faculty = 'BIM';

myfunction($faculty);
$a = 2;
$b = 3;
$sum = mySum($a,$b);
echo '<br>';
echo "The sum is $sum";
?>