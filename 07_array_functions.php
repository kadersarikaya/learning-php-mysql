  <?php

  $fruits = ['apple', 'banana', 'orange', 'plum', 'dates', 'mango'];

    // echo count($fruits);

    //Search array
   // var_dump(in_array('apple', $fruits));

    //Add to array
    $fruits[] = 'grape';
    array_push($fruits, 'jackfruit', 'strawberry');
    array_unshift($fruits, 'pineapple', 'watermelon');
    
    //Remove from array
    array_pop($fruits);

    array_shift($fruits);
    unset($fruits[1]);

    // split into 2 chunks
    $chunked = array_chunk($fruits, 2);
    
    // print_r($chunked);

   // print_r($fruits);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];    

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    // print_r($arr4);

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];

    $c = array_combine($a, $b);
   // print_r($c);

    $keys = array_keys($c);
    //print_r($keys);

    $flipped = array_flip($c);
    //print_r($flipped);

    $numbers = range(1, 10);

    // print_r($numbers);

    $newNumbers = array_map(function($number)
    {
      return $number * 2;
    }, $numbers);


    // print_r($newNumbers)

    $lessThan10 = array_filter($numbers, fn($number) => $number < 10);

    // print_r($lessThan10);

    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number, 0);

    var_dump($sum);