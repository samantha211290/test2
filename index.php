<?php
function distancia($x1,$y1,$x2,$y2){

    $dis=sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
    
    return $dis;
    
}
//punto1
$x1=1;
$y1=1;

//punto2
$x2=2;
$y2=2;

//punto 3
$x3=3;
$y3=3;

//calcular la distancia de cada segmento y al final arrojamos el promedio

//distancia entre P1P2
$dp1p2=distancia($x1,$y1,$x2,$y2);

//distancia entre P1P3
$dp1p3=distancia($x1,$y1,$x3,$y3);

//distancia entre P2P3
$dp2p3=distancia($x2,$y2,$x3,$y3);

//calcular promedio
$promediodistancia=($dp1p2+$dp1p3+$dp2p3)/3;

echo "Promedio de la distancia de los tres puntos:".$promediodistancia;

    



?>