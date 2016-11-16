<?php
 function first($a)
 {
 	if($a > 'a'&&$a < 'e')
 	{
 		echo $a='a';
 	    echo "<br/>";
 	}
 	else if ($a>'e')
 	{
 		echo $a='e';
        echo "<br/>";
    }
 	else
 	{
 		echo $a="ok";
 	    echo "<br/>";
 	}
 }
 function second(&$c)
 {
 	echo ($c>2)?'$c大于2':'$c小于二';
 }
 $b='f';
 first($b);
 $d=1;
 second($d);
 $m=array("the","home","work","secondly" );
 foreach ($m as $n ) 
 {
 	echo "\$m的元素的当前值为 $n";
 	echo "<br>";
 	
 }




 		
 ?>