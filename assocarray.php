<?php
//associative arrays
//the arrays that use named keys
// $faculty = array ("BIM" => "33", "CSIT" => "48");
//OR
$faculty['BIM'] = '33';
$faculty['CSIT'] = '48';

foreach($faculty as $f=>$val)
{
    echo 'Faculty: '. $f . ' has '. $val . ' seats';
    echo '<br>';
}

?>

