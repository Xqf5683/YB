<?php
{
	$a = '1'
	if($a > 'a')
	{
		echo 'a';
	}
	elseif($a > 'e')
	{
		echo 'e';
	}
	else
	{
		echo 'ok';
	}
}
?>
*/

<?php
{
	$a = 1;
	$b = 2
	echo ($a>$b)?"a大于b":"a不大于b";
}

?>
*/

<?php
{
	$a = array(1, 2, 3, 5);
	foreach ($a as $v) 
	{
		print"/$a的数组的当前值为： {$v} <br>";
	}
	$b = array ('a'=> 1, 'b'=> 2,'c'=> 3,'d'=> 17);
	foreach ($b as $i => $v)
	{
		echo "{$i} => {$v} <br>";
	}
} 
?>
*/