<?php 
class Employee{
    public function __construct(){
        $this->db = new Database;
    }

    public function getEmployees(){
        $this->db->query("SELECT * FROM employees");
        return $this->db->resultSet();
    }

}