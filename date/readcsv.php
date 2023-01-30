<?php 
$filename = 'stock.csv';
$data = [];

// open the file
$f = fopen($filename, 'r');

if ($f === false) {
	die('Cannot open the file ' . $filename);
}

// read each line in CSV file at a time
while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
}

foreach($data as $val){
    for($i=0;$i<count($data);$i++){
        echo $val[$i];
        echo "\t &nbsp; \t";
    }
    echo "<br>";
}

// close the file
fclose($f);
?>