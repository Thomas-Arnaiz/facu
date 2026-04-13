<?php
require_once 'app/views/home.view.php';

class AlumnosController
{
    private $model, $view;

    public function __construct()
    {
        $this->view = new HomeView();
    }

    public function home()
    {
        $this->view->homeView();
        $heladeras = $this->model->getAllHeladeras();
        $this->view->renderHeladeras($heladeras);
    }
}
