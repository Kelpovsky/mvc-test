<?php

class controller_main extends Controller {
function __construct() {
        $this->model = new model_main();
        $this->view = new View();
    }
    
    function action_index() {
        $insert = $this->model->insert_data();
        $data = $this->model->get_data();
        $this->view->generate('main_view.php', 'template_view.php', $data, $insert);
        
    }

}
