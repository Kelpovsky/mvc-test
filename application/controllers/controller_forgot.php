<?php

class controller_forgot extends Controller {
function __construct() {
        $this->model = new model_forgot();
        $this->view = new View();
    }
    
    function action_index() {
        $data = $this->model->get_data();
        $this->view->generate('forgot_view.php', 'template_view.php', $data);
        
    }

}
