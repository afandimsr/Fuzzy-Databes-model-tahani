<?php 




function trapesium($x,$a,$b,$c,$d){
    if($a>$b || $a>$c ||$a>$d){
        echo("ingat bahwa $a<=$b, $b<=$c, $c<=$d");
    }
    elseif($b>$c || $b >$d){
        echo("ingat bahwa $b<=$c, $b<=$d");
    }
    // $y = [];
    // $ydef=0;
    // for($i=0;$i<=$x;$i++){
    //     array_push($y,$ydef);
    // }
    // echo $y;
    // for($i=0;$i<count($y);$i++){
        if( $x<=$a || $x>=$d){
            $y=0;
        }
        // Lereng kiri trapesium 
        if($a !=$b && $a<$x && $x<$b){
            $y= ($x-$a)/($b-$a);
        }
        // Lereng tengah 
        if($b<=$x && $x<=$c){
            $y= 1;
        }
        // lereng kanan trapesium 
        if($c!=$d && $c <$x && $x<$d){
            $y= ($d-$x)/($d-$c);
        }
                
    // }
    return $y;
}


function segitiga($x, $a, $b, $c){
    if($a>$b || $a>$c ){
        echo("ingat bahwa $a<=$b, $b<=$c");
    }
    elseif($b>$c){
        echo("ingat bahwa $b<=$c");
    }
    $y = [];
    if($x<=$a || $x>=$c){
        $y = 0;
    }
    // lereng kiri
    if($x>$a && $x <$b){
        $y=($x-$a)/($b-$a);
    }
    // titik puncak
    if($x == $b ){
        $y = 1;
    }
    if($x>$b && $x <$c){
        $y = ($c-$x)/($c-$b);
    }
    return $y;
}
// $x = trapesium(25,0,0,30,40);
// var_dump($x);
// echo $x;





?>