<?php
declare(strict_types=1);
namespace Acme;


class Manager extends Employee implements IManager {
	protected $arrEmployeesId;
	
	public 	function __construct(int $id, string $name,float $salary, int $age) {
	    parent::__construct($id, $name, $salary, $age);
		$this->arrEmployeesId=array();
	}
	
	public function add(int $employeeId) {
		$this->arrEmployeesId[] = $employeeId;
	}
	
	public function getArrEmployeesId() : array {
		return $this->arrEmployeesId;
	}
}
?>