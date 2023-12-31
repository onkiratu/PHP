<?php 

// factorial non-recursive way 

 function factorial($x) {
     $y = 1;

     for($i = 1; $i<=$x; $i++) {
         $y*=$i;
     }
     return $y;
 }
echo factorial(5);
echo "<br>";

//factoial by recursion 
function factorial2($x){
    if($x<=1){
        return 1; 
    }
    return $x * factorial ($x - 1);
}
echo factorial2(6); 
echo "<br>";
?>


<?php 

//fibonacci non recursion

function fib($x){
    $prev = -1;
    $result = 1;
    $sum = 0;

    for($i = 0; $i<=$x; $i++){
        $sum = $prev + $result;
        $prev = $result;
        $result = $sum; 
    }
    return $result; 
}
echo fib(7);

?>

<?php
//fibonacci recursion
function fib2($x) {
    //base case
    if($x <=2){
        return 1;
    }
    return fib($x-1) + fib($x - 2);
}
echo "<br>";
echo fib(10);

//gcd without recursion 
function gcd($x,$y){
    while($y !=0){
        $temp = $y;
        $y = $x%$y;
        $x = $temp;
    }
    return $x;
}

echo "<br>"; 
echo gcd(63,12);

//gcd with recursion
function gcd2($x,$y){
    if($y == 0){
        return $x;
    }
    return gcd2($y, $x%$y);
}
echo "<br>";
echo gcd(108,12);