<?php
// F Auditorium 
// git 
// git clone URL 
// git pull


// class employee
// {
// 	var $employee_id;
// 	var $employee_name;
// 	var $employee_type; //daily, monthly
// 	function getEmployeeInfo()
// 	{
// 		$info[] = array(
// 					"id"=>$this->employee_id,
// 					"name"=>$this->employee_name,
// 					"type"=>$this->employee_type,
// 					);
// 		$info[] = array(
// 					"id"=>$this->employee_id,
// 					"name"=>$this->employee_name,
// 					"type"=>$this->employee_type,
// 					);


// 		echo json_encode($info);
// 	}
// }

// $obj_employee = new employee();
// $obj_employee->employee_id 		= 100;
// $obj_employee->employee_name 	= "abc";
// $obj_employee->employee_type 	= "monthly";

// $obj_employee->getEmployeeInfo();
//php5.5 >
class phone_dairy implements JSonSerializable 
{
	var $name;
	var $phone_no;

	function __construct($name,$phone)
	{
		$this->name 	= $name;
		$this->phone_no = $phone;
	}

	function JsonSerialize()
	{
		return ["API_KEY"=>"1234567878","API_SECERET"=>"PASSWORD","name"=>$this->name, "phone"=>$this->phone_no];
	}
}

$phone_dairy_obj = new phone_dairy("Abc",1234567);
// echo "<pre>";
print_r($phone_dairy_obj);
echo json_encode($phone_dairy_obj);
// echo "</pre>";

// SPL CLASS PHP -> Interfaces

?>