<?php
    class RequestModel{
        private $db;
        private $requests;

        public function __construct(){
            $this->db = Connect::Connection();
            $this->requests = array();
        }

        public function index(){
            $sql = "SELECT `requests`.`id`, `code`, `description`, `summary`, `employees_id`, `name` FROM `requests` INNER JOIN `employees` ON `requests`.`employees_id` = `employees`.`id` LIMIT 0, 1000";
            $result = $this->db->query($sql);
            while($row = $result->fetch_assoc()){
                $this->requests[] = $row;
            }
            return $this->requests;
        }

        // INNER JOIN `requests` ON `id` = `employees_id`
        public function show($id){
            $sql = "SELECT `id`, `code`, `description`, `summary`, `employees_id` FROM `requests` WHERE id = '$id' LIMIT 1";
            $result = $this->db->query($sql);
            return $result->fetch_assoc();
        }

        public function store($code, $description, $summary, $employees_id){
            $sql = "INSERT INTO `requests` (`code`, `description`, `summary`, `employees_id`) VALUES ('$code', '$description', '$summary', '$employees_id')";
            $this->db->query($sql);
        }

        public function update($id, $code, $description, $summary, $employees_id){
            $sql = "UPDATE `requests` SET `code` = '$code', `description` = '$description', `summary` = '$summary', `employees_id` = '$employees_id' WHERE `id` = '$id'";
            $this->db->query($sql);
        }

        public function destroy($id){
            $sql = "DELETE FROM `requests` WHERE `id` = '$id'";
            $this->db->query($sql);
        }

        /* public function soft_delete($id){
             $sql = "UPDATE `request` SET deleted_at = '' WHERE `id` = '$id'";
             $this->db->query($sql);
        } */
    }
