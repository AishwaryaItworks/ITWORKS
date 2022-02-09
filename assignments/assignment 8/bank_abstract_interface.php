<?php
abstract class Account{
	abstract protected function get_account_number($account_number,$account_type);
	/*abstract protected function account_type();
	abstract protected function account_balance();*/


}

interface Loan{
	public function loan_account_details($loan_account_no,$loan_account_date,$loan_amount,$loan_interest);
}

class Account_holder extends Account implements Loan{
	public $customer_name;
	public $customer_address;
	public $customer_account_create_date;

	public function loan_account_details($loan_account_no,$loan_account_date,$loan_amount,$loan_interest){
		echo "<br>Loan_account_no: ".$this->loan_account_no=$loan_account_no;
		echo"<br>Loan_account_date: ".$this->loan_account_date=$loan_account_date;
		echo "<br>Loan_amount: ".$this->loan_amount=$loan_amount;
		echo "<br>Loan_interest: ".$this->loan_interest=$loan_interest;

	}

	public function get_account_number($account_number,$account_type){
		echo "<br>Account Number: ".$this->account_number=$account_number;
		echo "<br>Type of Account: ".$this->account_type=$account_type;

	}

	public function set_customer_detail($customer_name,$customer_address,$customer_account_create_date){
		$this->customer_name=$customer_name;
		$this->customer_address=$customer_address;
		$this->customer_account_create_date=$customer_account_create_date;


	}

	public function get_customer_detail()
	{
		echo "<br>Customer Name: ".$this->customer_name;
		echo "<br>Customer Address: ".$this->customer_address;
		echo "<br>Date of Account Created: ".$this->customer_account_create_date;

	}
}

$acc=new Account_holder();
$acc2=new Account_holder();
$acc->get_account_number('SBA120011','Saving');
$acc->set_customer_detail('Nikita','Pune','12-Jan-2020');
$acc->get_customer_detail();
$acc->loan_account_details(4110043,'09-Feb-2022',1,00,000,10,000);
echo "<br>";

$acc->get_account_number('SBA120012','Salary');
$acc->set_customer_detail('Aishwarya','Mumbai','23-Oct-2017');
$acc->get_customer_detail();

echo "<br>";
$acc->get_account_number('SBA120012','Current');
$acc->set_customer_detail('Trupti','Nagpur','20-Aug-2018');
$acc->get_customer_detail();


?>