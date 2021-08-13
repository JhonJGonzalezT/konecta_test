<?php
    class EmployeeController {

        public function __construct(){
            require_once 'models/EmployeeModel.php';
        }

        public function index () {
            $employees = new EmployeeModel();
            $data['title'] = 'Listado de Empleados';
            $data['employees'] = $employees->index();
            require_once 'views/employees/employees.php';
        }

        public function view_create () {
            $data['title'] = 'Agregar empleado';
            require_once 'views/employees/create_employee.php';
        }

        public function view_update ($id) {
            $employee = new EmployeeModel();
            $data['title'] = 'Actualizar empleado';
            $data['employee'] = $employee->show($id);
            $data['id'] = $id;
            require_once 'views/employees/update_employee.php';
        }

        public function store () {
            $name = $_POST['name'];
            $date_entry = $_POST['date_entry'];
            $salary = $_POST['salary'];
            $employee = new EmployeeModel();
            $employee->store($name, $date_entry, $salary);
            $this->index();
        }

        public function update () {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $date_entry = $_POST['date_entry'];
            $salary = $_POST['salary'];
            $employee = new EmployeeModel();
            $employee->update($id, $name, $date_entry, $salary);
            $this->index();
        }

        public function destroy ($id) {
            $employee = new EmployeeModel();
            $employee->destroy($id);
            $this->index();
        }


    }