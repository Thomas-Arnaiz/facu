<?php
class HomeView
{

    public function homeView()
    {
        require_once 'app/template/header.phtml';
        require_once 'app/template/home.phtml';
        require_once 'app/template/footer.phtml';
    }

    public function renderCatalogo($ropas)
    {
        require_once 'app/template/header.phtml';
        require_once 'app/template/ropa.phtml';
        require_once 'app/template/footer.phtml';
    }
}
