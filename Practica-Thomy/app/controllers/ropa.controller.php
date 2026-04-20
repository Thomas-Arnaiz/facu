<?php
require_once 'app/views/home.view.php';
require_once 'app/models/ropa.model.php';

class RopaController
{
    private $model, $view;

    public function __construct()
    {
        $this->view = new HomeView();
        $this->model = new RopaModel();
    }

    public function home()
    {
        $ropas = $this->model->getAllRopa();
        $this->view->renderCatalogo($ropas);
    }

    public function delete()
    {
        if ($_POST) {
            $ropaAEliminar = $_POST['select-ropa'];
        }

        if ($this->model->deleteRopa($ropaAEliminar)) {
            header("Location: " . BASE_URL);
        } else {
            echo "Error al eliminar la ropa.";
        }
    }
}
