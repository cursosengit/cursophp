<?php

//Acumulador de suma

$suma = 0;

for ($i = 0; $i <= 10; $i++) {
	
	$suma = $suma + $i;
	
}

echo $suma;

/*
0 + 0 = 0

i = 1
0 + 1 = 1

i = 2
1 + 2 = 3

i = 3
3 + 3 = 6

i = 4
6 + 4 = 10

i = 5
10 + 5 = 15

i = 6
15 + 6 = 21

i = 7
21 + 7 = 28

i = 8
28 + 8 = 36

i = 9
36 + 9 = 45

i = 10
45 + 10 = 55

i = 11 FALSE 
*/
?>