<?php
namespace Acme;

Interface IManager extends IEmployee {
    public function __construct(int $id, string $name,float $salary, int $age);    
    public function add(int $employeeId);
    public function getArrEmployeesId() : array;
}
?>