<?php
$scores = [
    "Alice" => 99,
    "Bob" => 95,
    "Charlie" => 98,
    "Destiny" => 91,
    "Edward" => 88
  ];
  foreach ($scores as $score) {
    echo "Someone received a score of $score.\n"; 
  }
//   Nama:Catur nurul huda
//   NIm: 2255201015
  foreach ($scores as $name => $score) {
    echo "$name received a score of $score.\n";
  }