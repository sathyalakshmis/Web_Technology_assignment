<?php
function transpose($data)
{
 $transData = array();
 foreach ($data as $row => $arr) {
 foreach ($arr as $col => $val) {
 $transData[$col][$row] = $val;
 }
 }
 display($transData);
 }
function mul($a,$b)
{
$c = array();
for($i=0;$i<count($a);$i++)
{
 for($j=0;$j<count($b);$j++)
 {
 $c[$i][$j]=0;

 for($k=0;$k<count($a);$k++)
 {

 $c[$i][$j]=$c[$i][$j]+($a[$i][$k]*$b[$k][$j]);
 }
 }
}
 display($c);
}
function add($a,$b)
{
 $c = array();
 for($i=0; $i<count($a); $i++)
 {
 for($j=0; $j<count($b); $j++)
 {

   $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
 }
 }
 display($c);
}
function display($data)
{
foreach ($data as $value)
 {
 for($i=0;$i<count($value);$i++)
 {
 echo $value[$i]."\t";
 }
 echo "<br>";
 }
}
$a = array(
 array(1,2,3),
 array(4,5,6),
 array(7,8,9),
 );
$b = array(
 array(1,2,3),
 array(4,5,6),
 array(7,8,9),
);
echo "Matrix 1 <br>";
display($a);
echo "Matrix 2 <br>";

display($b);
echo "Transpose of Matrix 1<br>";
transpose($a);
echo "Transpose of Matrix 2<br>";
transpose($b);
echo "Multiplication of two matrices<br>";
mul($a,$b);
echo "Addition of two matrices<br>";
add($a,$b);
?>