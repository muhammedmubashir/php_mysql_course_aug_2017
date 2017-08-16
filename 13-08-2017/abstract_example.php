<?php
// interface BaseEmployee
// {
// 	var $employee_id;
// 	var $employee_name;
// 	var $employee_type; //daily, monthly
// 	var $no_of_days;
	
// 	function getEmployeeSalary();	
// 	function getEmployeeInfo();	
// }
abstract class BaseEmployee
{
	var $employee_id;
	var $employee_name;
	var $employee_type; //daily, monthly
	var $no_of_days;
	
	function getEmployeeInfo()
	{
		return array(
					"id"=>$this->employee_id,
					"name"=>$this->employee_name,
					"type"=>$this->employee_type,
					);
	}

	abstract function getEmployeeSalary();
}

class Employee_daily extends BaseEmployee
{
	var $cost_per_day;
	function getEmployeeSalary()
	{
		return $this->cost_per_day * $this->no_of_days;
	}
}

class Employee_monthly extends BaseEmployee
{
	function getEmployeeSalary()
	{
		return $this->cost_per_day * 30;
	}
}



$employee_1 = new Employee_daily();
$employee_1->per_day_cost = 1000;
$employee_1->no_of_days = 24;
$employee_salary = $employee_1->getEmployeeSalary();
echo $employee_salary;

?>