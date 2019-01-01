<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Животные</title>
    </head>
    <body>
      <h1>Животные</h1>

      
      
    </body>
  </html> 

  <?php 
$animals = ['Europe' => ['Cervus elaphus', 'Erinaceus europaeus'], 
	             'Asia' => ['Ailuropoda melanoleuca', 'Pholidota'],
	             'Africa' => ['Giraffa camelopardalis',  'Troglodytes gorilla'],
	             'Australia' => ['Macropus rufus',  'Vombatidae'],
	             'India' => ['Elephas maximus'], 
	             'Antarctida' => ['Aptenodytes forsteri', 'Leptonychotes weddellii'],
	             'North America' => ['Vulpes lagopus', 'Ovibos'],
	             'Southern America' => ['Cacajao calvus', 'Vicugna pacos', 'Lagidium']];



 
$animals2 = []; 
foreach($animals as $areaName => $animalArray) {
    foreach ($animalArray as $animalName) {
        if (strpos($animalName, ' ') !== false) {
          $animals2[] = $animalName;
        }
    }
}
print_r($animals2); 

$b = implode(' ', $animals2);

var_dump($b); 
 
 $c = explode(' ', $b);

 var_dump($c);

 

 foreach ($c as $key => $value) {
        if (($key + 1) % 2 != 0) {
            $even[] = $value;
            print_r($even) . '<br />';
            echo '<pre>';
        }
    }

 foreach ($c as $key => $value) {
        if (($key + 1) % 2 == 0) {
            $odd[] = $value;
            print_r($odd) . '<br />';
            echo '<pre>';
        }
    }

    shuffle($even);
    print_r($even);
    
$result1 = array_combine($even, $odd);
print_r($result1);

foreach ($result1 as $key => $value) {
  $result2 =  $key  . ' ' .  $value . '<br>';
  print_r($result2);
}


?>