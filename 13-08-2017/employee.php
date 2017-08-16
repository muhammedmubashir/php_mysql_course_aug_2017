<?php
class Employee
{
	var $employee_id;
	var $employee_name;
	var $employee_type; //daily, monthly
	var $no_of_days;
	var $per_day_cost;

	function __construct($id,$name,$type)
	{
		$this->employee_id 		= $id;
		$this->employee_name 	= $name;
		$this->employee_type 	= $type;
	}

	function getEmployeeInfo()
	{
		return array(
					"id"=>$this->employee_id,
					"name"=>$this->employee_name,
					"type"=>$this->employee_type,
					);
	}

	function getEmployeeSalary()
	{
		if($this->employee_type == "daily")
		{
			return $this->per_day_cost * $this->no_of_days;
		}
		else
		{
			return $this->per_day_cost * 30;
		}
	}
}


$employee_1 = new Employee(1001,"abc", "daily");
$employee_1->per_day_cost = 1000;
$employee_1->no_of_days = 24;
$employee_salary = $employee_1->getEmployeeSalary();
echo $employee_salary;

?>