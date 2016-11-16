<?php
class person
{
	var $name,$age;
}
class student extends person
{
	var $student_id;
	function put($name,$age,$student_id,$home)
	{
		echo $name;
		echo "<br>";
		echo $age;
		echo "<br>";
		echo $student_id;
		echo "<br>";
		echo $home;
		echo "<br>";
	}
}
$he= new student;
$he->put("lin","17","123456","ln");
$name="ysjhc";
$age=100;
$home="sanyuang";
$he->put($name,$age,"111111",$home);
?>