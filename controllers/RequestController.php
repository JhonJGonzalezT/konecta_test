<?php
    class RequestController {

        public function __construct(){
            require_once 'models/RequestModel.php';
        }

        public function index () {
            $requests = new RequestModel();
            $data['title'] = 'Listado de solicitudes';
            $data['requests'] = $requests->index();
            require_once 'views/requests/requests.php';
        }

        public function view_create () {
            $data['title'] = 'Agregar solicitud';
            require_once 'views/requests/create_request.php';
        }

        public function view_update ($id) {
            $request = new RequestModel();
            $data['title'] = 'Actualizar solicitud';
            $data['request'] = $request->show($id);
            $data['id'] = $id;
            require_once 'views/requests/update_request.php';
        }

        public function store () {
            $code = $_POST['code'];
            $description = $_POST['description'];
            $summary = $_POST['summary'];
            $employees_id = $_POST['employees_id'];
            $request = new RequestModel();
            $request->store($code, $description, $summary, $employees_id);
            $this->index();
        }

        public function update () {
            $id = $_POST['id'];
            $code = $_POST['code'];
            $description = $_POST['description'];
            $summary = $_POST['summary'];
            $employees_id = $_POST['employees_id'];
            $request = new RequestModel();
            $request->update($id, $code, $description, $summary, $employees_id);
            $this->index();
        }

        public function destroy ($id) {
            $request = new RequestModel();
            $request->destroy($id);
            $this->index();
        }


    }