<?php
//**************** 1 */
$numbers =[40,15,30];

usort($numbers, function($x,$y){
  if ($x===$y){
   return 0;
  }
  return $x<$y ? -1:1;  
});

print_r($numbers);

?>

<?php
//***********************2 */
echo"</br>";
$names = ['Adam', 'Andrew', 'Monty'];
foreach($names as $name) {
    $greeting = 'Hello ';
    $greeting .= $name;
    echo $greeting;
    echo"</br>";
}

?>
<?php
//**************************3 */
    $arr = [1, 2, 3, 4, 5];
 
    $last = array_pop($arr);
    print_r("The last item is " . $last . "\n");
    print_r($arr);
 
    echo"</br>";
?>

<?php
//****************4 */
$word = "fox";
$mystring = "The quick brown fox jumps over the lazy dog";
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    echo "Letters found";
} else{
    echo "whitespace found";
}
echo"</br>";
?>



<?php 
//*****************************5 */
function findSecondMax(array $arr) {
    
    //If array is empty then return
    if(empty($arr)) {
        return;
    }
    
    /*
     * Initialize max and second max with negative value
     */
    $max = PHP_INT_MIN;
    $secondMax = PHP_INT_MIN;
    
    //Traverse an array
    foreach($arr as $number) {
        
        //If it's greater than the value of max
        if($number > $max) {
            
            $secondMax = $max;
            $max = $number;
        }
        
        //If array number is greater than secondMax and less than max
        if($number > $secondMax && $number < $max) {
            $secondMax = $number;
        }
    }
    
    return $secondMax;
}
 
$arr = array(70, 4, 8, 10, 14, 9, 7, 6, 5, 3, 2);
 
$second_maximum = findSecondMax($arr);
 
echo "Second Highest Element is ".$second_maximum;
?>
