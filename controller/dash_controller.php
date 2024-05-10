<?php

class DashboardController{
    static function index(){
        $data = [
            'title' => 'Contact App Arrel',
        ];

        $this->view('pages/admin/dashboard', $data);
    }
}

?>