<?php
class HomeView
{

    public function homeView()
    {
        require_once 'app/template/header.phtml';
        require_once 'app/template/home.phtml';
        require_once 'app/template/footer.phtml';
    }

    public function renderHeladeras($heladeras)
    {
        require_once 'app/template/header.phtml';
        require_once 'app/template/heladeras.phtml';
        require_once 'app/template/footer.phtml';
    }
}
