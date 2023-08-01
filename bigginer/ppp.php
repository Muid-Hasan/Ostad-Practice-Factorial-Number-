<?php

function findLongestWord($x) {

  $words = str_word_count($x, 1);

  $longestWord = $words[0]; 

  foreach ($words as $word) {
    if (strlen($word) > strlen($longestWord)) {
      $longestWord = $word;
    }
  }

  return $longestWord;

}

$str = "The quick brown fox jumped over the lazy dog";
$longestWord = findLongestWord($str);
echo  $longestWord;
