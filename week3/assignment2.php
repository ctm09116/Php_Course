<?php
echo "<h2 style='color:green;'>Question 1<h2>";
$num1=16;
$num2=9;
$num3=7;
if ($num1 > $num2 && $num1 > $num3){
    echo"<h3 style='color:green;'>the greatest is:<h3>" . $num1;
    }elseif ($num2 > $num1 && $num2 > $num3){
    echo"<h3 style='color:green;'>the greatest is:<h3>" . $num2;
    }else {
        echo"<h3 style='color:green;'>the greatest is:<h3>" . $num3;
    }
echo"<br>";
if($num1 < $num2 && $num1 < $num3){
    echo"<h3 style='color:blue;'>the smallest is:<h3>", $num1;
}elseif ($num2 < $num1 && $num2 < $num3){
    echo"<h3 style='color:blue;'>the smallest is:<h3>" . $num2;
    }else{
        echo"<h3 style='color:blue;'>the smallest is:<h3>" . $num3 ;
    }


    echo "<br>";

    echo "<h2 style='color:green;'>Question 2</h2>";
    $num1=30;
if($num1 % 3==0 && $num1 % 5==0){
    echo" $num1 is divible by 3 & 5";
}
elseif($num1 % 3==0 ){
    echo" $num1 is divible by 3";
}
elseif($num1 % 5==0 ){
    echo" $num1 is divible by 5";
}

else{
    echo"this number is not divisible by 3 or 5";
}

echo "<br>";

echo "<h2 style='color:green;'>Question 3</h2>";
$count=2;
echo"<h2 style='color:blue;'>odd numbers 2_20<h2>";
while($count<=20){
    if($count%2 !=0){
        echo $count . "<br>";
    }
    $count++;
}
echo "<br>";
echo"<h2 style='color:blue;'>even numbers numbers 35_7<h2>";
for($i=35; $i >=7;$i--){
    if($i % 2 == 0){
        echo $i . "<br>";
    }
}

echo "<br>";

echo "<h2 style='color:green;'>Question 4</h2>";
echo"<h2>numbers divisible by 2 and 5, 2_50<h2>";
for($i=2; $i<=50;$i++){
    if($i%2 ==0 && $i %5==0){
        echo $i . "<br>";
    }
}

echo "<br>";

echo "<h2 style'color:green;'>Question 5</h2>";
$num=12345;
$reverse=0;
while($num>0){
    $digit=$num%10;
    $reverse=($reverse * 10) + $digit;
    $num=(int)($num/10);
}
echo "reverse: " . $reverse;

echo "<br>";

echo "<h2 style='color:green;'>Question 6</h2>";
$a=4;
$b=12;
$lcm=$a;
while($lcm % $b != 0){
    $lcm= $lcm +$a;

}
echo "lcm: " . $lcm;

echo "<br>";

echo "<h2 style='color:green;'>Question 7</h2>";
$a=4;
$b=12;
$hcf=1;
for($i=1;$i <= $a && $i <= $b; $i++){
    if($a % $i ==0 && $b % $i ==0){
        $hcf=$i;
    }
}
echo "hcf: " . $hcf;

echo "<br>";

echo "<h2 style='color:green;'>Question 8</h2>";
echo "<table border='1' cellpadding='8'>";
for($i=1; $i <=12; $i++){
    echo "<tr>";
    for($j=1; $j <= 12; $j++){
        echo"<td>" .($i * $j) . "</td>";
    }
    echo"</tr>";
}
echo"</table>";

echo "<br>";

echo "<h2 style='color:green;'>Question 9</h2>";
$num=19;
$isprime=true;
if ($num < 2){
    $isprime = false;
}
for($i=2; $i <$num; $i++){
    if($num % $i ==0){
        $isprime=false;
        break;
    }
}
if($isprime){
    echo $num . " is prime number";
}else{
    echo $num . " is not prime number";
}

echo "<br>";

echo "<h2 style='color:green;'>Question 10</h2>";

for($num =10; $num<=50;$num++){
    $isprime=true;
    for($i =2; $i<$num;$i++){
        if($num % $i ==0){
            $isprime=false;
        break;
        }
    }
    if($isprime){
        echo $num . "<br>";
    }
}
?>