#A PROGRAM TO FIND THE PALINDROME
<?php  
function palindrome($n){  
$number = $n; /* initialising number with value of n*/ 
$sum = 0;  /* setting sum as zero*/
while(floor($number)) {  
$rem = $number % 10; /* Setting rem with the modulous of number and 10*/
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number";  
} else {  
echo "$input is not a Palindrome";  
}  
?>  
