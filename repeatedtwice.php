<?php

$filePath = './q_5000000_3000.txt';
$numArr = [];
$repnumArr = [];

if(!file_exists($filePath)){
    echo "Couldn't find a file.\n";
    return 0;
}

$f = fopen($filePath, 'r');

while( $value = fgets($f, 32) ) {
  if ( !isset($numArr[$value]) ) {
    $numArr[$value] = 1;
    continue;
  }
  $numArr[$value]++;
}

foreach($numArr as $value => $key) {
  if($key == 2) {
    $repnumArr[$value] = 0;
  }
}

krsort($repnumArr);

foreach ($repnumArr as $value => $key) {
  echo $value . 'is repeated twice.' . "\n";
}

echo 'count: ' . count($repnumArr) . "\n";

fclose($f);
