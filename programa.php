<?php
include_once "CollatzHistogram.php";

$start = 10;
$end = 10000; 

$histogramAnalyzer = new CollatzHistogram($start, $end);
$histogramAnalyzer->generateHistogram();

echo "<h2>3x+1 histogramos analizė</h2>";
echo "Autorius: " . Collatz::AUTHOR . " | Versija: " . Collatz::VERSION . "<br><br>";

$histogramAnalyzer->printHistogram();
