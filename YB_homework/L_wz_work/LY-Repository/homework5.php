
<?php
class person
{
    public $name;
    public $age;
    function __construct($name = "tom",$age = 17)
    {
    	$this->name=$name;
    	$this->age=$age;
    }
}



class student extends person
{
	var $student_id=12;
	

	function output ()
	{

	    echo "name:"."$this->name"."<br>"."age:"."$this->age"."<br>"."student_id:"."$this->student_id";
	}
}
$p1 = new student;
$p1->output();
?>









