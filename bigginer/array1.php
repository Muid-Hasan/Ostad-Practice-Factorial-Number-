<?php 

function findLongestWord($str) {
    $words = explode(" ", $str); // split the string into an array of words
    
    $longestWord = $words[0]; // initialize the longest word to the first word
    
    foreach ($words as $word) {
      // If the current word is longer than the current longest word, update the longest word
      if (strlen($word) > strlen($longestWord)) {
        $longestWord = $word;
      }
    }
    
    return $longestWord;
  }
  
