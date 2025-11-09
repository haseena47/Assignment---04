<?php
$mark=array(12,34,56);
echo (is_array($mark)) ? "Is an array" : "Is not an array";
?>

<?php
$mark=78;
echo (is_array($mark)) ? "Is an array" : "Is not an array";
?>


<?php
$marks=array(12,34,56);
echo count($marks)
?>


<?php
$marks=array(12,34,56);
echo sizeof($marks)
?>


<?php
$marks=array(89,12,34,56);
sort($marks);
print_r($marks);
?>


<?php
$marks=array(89,12,34,56);
rsort($marks);
print_r($marks);
?>

<?php
$temp= explode(' ',"This is a sentence with seven words");
print_r($temp);
?>


<?php
$temp = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$temp);
?>


<?php
a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>


<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
?>


<?php
$a=array_fill(1,3,"green");
print_r($a);
?>


