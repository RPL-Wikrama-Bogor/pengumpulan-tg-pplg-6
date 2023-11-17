<h2>Bilangan genap dan ganjil dari 1 s.d 50</h2>

<?php
$i=1;
 
while( $i <= 50){
  if ($i % 2 !=0){
    print($i) . " bilangan ganjil <br>";
  }
  
  if ($i % 2 !=1){
    print($i) . " bilangan genap <br>";
  }
$i++;

}

?>