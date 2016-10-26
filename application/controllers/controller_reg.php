<?php

class controller_reg extends Controller {

    function __construct() {
        $this->model = new model_reg();
        $this->view = new View();
    }

    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('reg_view.php', 'template_view.php', $data);
    }

}
