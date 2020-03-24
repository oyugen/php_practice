<?php
$filePath = './q_5000000_3000.txt';
$numArr = [];

if (!file_exists($filePath)) {
    echo "Couldn't find a file.\n";
}

$f = fopen($filePath, 'r');

while( ($content = fgets($f, 32)) ) {
    $numArr[] = $content;
}

$countedNumArr = array_count_values($numArr);

foreach ($countedNumArr as $value => $key) {
  if($key == 2){
    $i++;
    $repNumArr[$i] = $value;
  }
}

krsort($repNumArr);

foreach ($repNumArr as $value) {
  echo $value . 'is repeated twice.' . "\n";
}

echo 'count: ' . count($repNumArr) . "\n";

fclose($f);
