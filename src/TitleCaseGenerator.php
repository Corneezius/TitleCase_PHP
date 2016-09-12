<?php

  class TitleCaseGenerator
  {
      function makeTitleCase($input_title)
      {
          $input_array_of_words = explode(" ", $input_title);
          $output_titlecased = array();
          foreach ($input_array_of_words as $word) {
              if($word != "of" && $word != "the" && $word != "and" && $word != "a" && $word != "or"){
                array_push($output_titlecased, ucfirst($word));
              }
              else{
                array_push($output_titlecased, $word);
              }
          }
          return implode(" ", $output_titlecased);
      }
  }
?>
