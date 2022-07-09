<?php
 $states = "Mississippi Alabama Texas Massachusetts Kansas";
 $my_array = preg_split("/ /", $states);
 for($i=0;$i<count($my_array);$i++)
 {
 if (preg_match("/xas/", $my_array[$i]))
 {
 $statesList[0] = $my_array[$i];
 }
 if (preg_match("/^k.*s$/i", $my_array[$i]))
 {
 $statesList[1] = $my_array[$i];

}
 if (preg_match("/^M.*s$/", $my_array[$i]))
 {
 $statesList[2] = $my_array[$i];
 }
 if (preg_match("/a$/", $my_array[$i]))
 {
 $statesList[3] = $my_array[$i];
 }
 }

 for($i=0;$i<count($statesList);$i++)
 {
 echo "[".$i."]=" .$statesList[$i]."<br>";

 }
?>