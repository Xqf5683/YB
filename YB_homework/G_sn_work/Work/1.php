作业
1.编写一个带参数函数，函数判断参数大于'a'输出a,大于e输出e，其他情况输出ok
2.编写一个带参数函数，判断参数大于2输出"大于2"，否则输出“小于2”，格式要用“ ($a>$b)?"a大于b":"a不大于b"; ”形式
3.写一个例子，利用foreach遍历输出一个数组中的每一个值


<?php
	if($a>'a')
		echo"a";
	else if($a>'e')
		echo"e";
	else
		echo"ok";
?>	

<?php
	if($a>2)
		echo"大于2";
	if($a<=2)
		echo"小于2";
?>

<?php 
	$a = array (1, 2, 3, 5);
foreach ($a as $v) 
{
    print "\$a的数组的当前值为：{$v} <br>";
}

$b = array ('a'=>1, 'b'=> 2, 'c'=> 3, 'd'=>17); 
foreach ($b as $i => $v) 
{ 
    echo "{$i} => {$v}<br>"; 
} 
?>


