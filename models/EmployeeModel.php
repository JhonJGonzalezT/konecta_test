<?php
    class EmployeeModel{
        private $db;
        private $employees;

        public function __construct(){
            $this->db = Connect::Connection();
            $this->employees = array();
        }
        public function index(){
            $sql = "SELECT `id`, `name`, `date_entry`, `salary` FROM `employees`";
            $result = $this->db->query($sql);
            while($row = $result->fetch_assoc()){
                $this->employees[] = $row;
            }
            return $this->employees;
        }

        public function show($id){
            $sql = "SELECT `id`, `name`, `date_entry`, `salary` FROM `employees` WHERE id = '$id' LIMIT 1";
            $result = $this->db->query($sql);
            return $result->fetch_assoc();
        }

        public function store($name, $date_entry, $salary){
            $sql = "INSERT INTO `employees` (`name`, `date_entry`, `salary`) VALUES ('$name', '$date_entry', '$salary')";
            $this->db->query($sql);
        }

        public function update($id, $name, $date_entry, $salary){
            $sql = "UPDATE `employees` SET `name` = '$name', `date_entry` = '$date_entry', `salary` = '$salary' WHERE `id` = '$id'";
            $this->db->query($sql);
        }

        public function destroy($id){
            $sql = "DELETE FROM `employees` WHERE `id` = '$id'";
            $this->db->query($sql);
        }

        /* public function soft_delete($id){
             $sql = "UPDATE ''employees'' SET deleted_at = '' WHERE `id` = '$id'";
             $this->db->query($sql);
        } */
    }