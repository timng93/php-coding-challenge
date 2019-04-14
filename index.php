<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php 
     function getVowels($str) {
         $vowelsCount = 0;
         $vowels = ["a", "e", "i", "o", "u"];
         foreach ($vowels as $vowel) {
          $vowelsCount += substr_count($str, $vowel);
         }
         return $vowelsCount;
     }

     echo getVowels("astarisborn");
?>    
</body>
</html>