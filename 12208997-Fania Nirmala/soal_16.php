<h3>Bilangan ganjil dan genap 1-50</h3>
<?php
    $i = 1;
    while($i <=50){
        if($i % 2 !=1){
            echo $i . " Bilangan genap, ";
        }
        else{
            echo $i . " Bilangan ganjil, ";
        }
        $i++;
    }
?>