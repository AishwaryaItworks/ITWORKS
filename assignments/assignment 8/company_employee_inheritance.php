<?php
class Company{

	protected $department_name;
	protected $deptpartment_id;

    public function set_dept_detail($department_name,$deptpartment_id)
    {
    	$this->department_name=$department_name;
    	$this->deptpartment_id=$deptpartment_id;

    }

    public function get_dept_detail(){
    	echo "<br>Department Name: ".$this->department_name;
    	echo "<br>Department Id: ".$this->deptpartment_id;

    }


}
class Employee extends Company{
	private $employee_id;
	private $employee_name;
	private $employee_salary;
    
    function set_employee_detail($employee_id,$employee_name,$employee_salary){

    	$this->employee_id=$employee_id;
    	$this->employee_name=$employee_name;
    	$this->employee_salary=$employee_salary;

    }

   function get_employee_detail(){

    	echo "<br>Employee Id: ".$this->employee_id;
    	echo "<br>Employee Name: ".$this->employee_name;
    	echo "<br>Employee Salary: ".$this->employee_salary;

    }

}

/*$com=new Company();*/
$emp=new Employee();

$emp->set_dept_detail('Operational',101);
$emp->set_employee_detail(11,'Aishwarya',40000);
$emp->get_dept_detail();
$emp->get_employee_detail();
?>
