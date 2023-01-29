<?php
echo '<select> ';

for($hour = 1; $hour <=12; $hour ++){
    echo "<option>$hour</option>";
}
echo '</select>';


echo '<select> ';

for($min = 1; $min <=60; $min ++){
    echo "<option>$min</option>";
}
echo '</select>';

echo '<select><option>AM</option><option>PM</option></select>'
?>