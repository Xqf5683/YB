<?php
   $value = array();
   for ($i=1; $i<=1000 ; $i++) 
   {
   	  $value[] = $i;
   }
   echo '</pre>';
   print_r($value);
   echo '</pre>';
   for ($i=0; $i <1000 ; $i++) { 
   	   echo "$value[$i]"."<br>";
   }

?>