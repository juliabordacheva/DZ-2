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
        if (substr_count($animalName, ' ') == 1) {
          $animals2[] = $animalName;
        }
    }
}
 

$b = implode(' ', $animals2);


 
 $c = explode(' ', $b);

 

 

 foreach ($c as $key => $value) {
        if (($key + 1) % 2 != 0) {
            $even[] = $value;
           
        } else {
         if (($key + 1) % 2 == 0) {
            $odd[] = $value; 
        }
    }
}

    shuffle($even);
    
    
$result1 = array_combine($even, $odd);


foreach ($result1 as $key => $value) {
  $result2 =  $key  . ' ' .  $value .'<br>';
 $fant[] = $result2;
 }


?>




<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>Животные</title>
    </head>
    <body>
      <h1>Животные</h1>

      <p><?=  $fant[0]; ?></p>
      <p><?=  $fant[1]; ?></p> 
      <p><?=  $fant[2]; ?></p>
      <p><?=  $fant[3]; ?></p>
      <p><?=  $fant[4]; ?></p>
      <p><?=  $fant[5]; ?></p>
      <p><?=  $fant[6]; ?></p>
      <p><?=  $fant[7]; ?></p>
      <p><?=  $fant[8]; ?></p>
      <p><?=  $fant[9]; ?></p>
      <p><?=  $fant[10]; ?></p>
      <p><?=  $fant[11]; ?></p>
      

      
      
      
    </body>
  </html> 

