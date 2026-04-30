<?php
echo "<h1>While</h1>";
$i=0;
while($i<=10){
    echo " $i";
    //$i++;$i++;
    //$i++//$i=$i+1//$i+=1
    $i+=2;
}
/*
Saída: 0 1 2 3 4 5
1) valor inicial? 0
2) condição? $i<=5
3) contador? $i++
4) quantas vezes o looping foi executado? 6
5) qual o valor que tornou a condição como falsa? 6
------------
Saída: 11 12 13 14
1) 11
2) $i<15 ou $i<=14
3) $i++
4) 4
5) 15
------------
Saída: 4 3 2 1 0
1) 4
2) $i>=0 ou $i>-1
3) $i--
4) 5
5) -1
------------
Saída: 0 2 4 6 8 10
1) 0
2) $i<=10 ou $i<12
3) $i+=2
4) 6
5) 12
*/
echo "<h1>Do while</h1>";
$i=7;
do{
    echo " $i";
    $i++;
}while($i<5);

echo "<h1>For</h1>";
for($i=0;$i<5;$i++) echo " $i";

echo "<h1>Looping aninhado</h1>";
for($i=4;$i<7;$i++){//ext //min
    for($j=0;$j<3;$j++){//int //seg
        echo "$i $j<br>";
    }
}
/*
i j
4 0
4 1
4 2
5 0
5 1
5 2
6 0
6 1
6 2


*/;
?>