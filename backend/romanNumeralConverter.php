<?php
  function romanNumConv ($item) {

    $returnItem = '';

    // Set arrays
    $numbers = array (1000,900,500,400,100,90,50,40,10,9,5,4,1);
    $numerals = array ('M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I');

    // if action not working. Needs to be fixed
    if (is_string($item)) {

      $item = strtoupper($item);


      for($i = 0; $i < count($numerals); $i++) {

        while(strlen($item) > 0) {
          $compare = strchr($item,$numerals[$i]);

          if (strlen($compare) > 0) {

            $returnItem = $returnItem + $numbers[$i];
            $item = substr($item, strlen($compare));
            print $item . " ";

          }

        }

      }

    } else if (is_integer($item)) {

      for($j = 0; $j < count($numbers); $j++) {

        if($item >= $numbers[$j]) {
          $returnItem .= $numerals[$j];
          $item -= $numbers[$j];
          $j--;
        }

      }

    } else {
        $item = "Error";
    }

    return $returnItem;

  }

  print romanNumConv('M');