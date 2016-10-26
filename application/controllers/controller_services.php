<?php

class Controller_Services extends Controller {

    function __construct() {
        $this->model = new model_services();
        $this->view = new View();
    }

    public function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('services_view.php', 'template_view.php', $data);
    }

}
