<?php
    $PABP = 70;
    $MTK = 82;
    $DPK = 77;

    $total = $PABP + $MTK + $DPK;
    $rata = $total / 3;

    if($rata >= 80 && $rata <= 100){
        echo "A";
    }elseif($rata >= 75 && $rata <80){
        echo "B";
    }elseif($rata >= 65 && $rata <75){
        echo "C";
    }elseif($rata >= 45 && $rata <65){
        echo "D";
    }elseif($rata >= 0 && $rata <45){
        echo "E";
    }else{
        echo "K";
    }
    