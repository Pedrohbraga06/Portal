<?php
 $array = array(1,2,7,6,10,8,4,6,2,4,11,3,5,9,5,7,12);
 $array2 = implode(",", $array);
 echo $array2."<br><br>"; 
 $result = array_unique($array);
 echo "<pre>";
 print_r($result);
 echo "</pre>";
?>