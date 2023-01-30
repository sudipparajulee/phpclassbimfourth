<?php

$data = [
	['Symbol', 'Company', 'Price'],
	['GOOG', 'Google Inc.', '800'],
	['AAPL', 'Apple Inc.', '500'],
	['AMZN', 'Amazon.com Inc.', '250'],
	['YHOO', 'Yahoo! Inc.', '250'],
	['FB', 'Facebook, Inc.', '30'],
];

$filename = 'stock.csv';

// open csv file for writing
$f = fopen($filename, 'w');

if ($f === false) {
	die('Error opening the file ' . $filename);
}

// write each row at a time to a file
foreach ($data as $row) {
	fputcsv($f, $row);
}

// close the file
fclose($f);

?>