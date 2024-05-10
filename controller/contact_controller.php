<?php 
include_once 'model/contact_model.php';

class ContactController {
    static function edit() {
        view('dash_page/layout', [
            'url' => 'view/crud_contact/edit',
            'contact' => Contact::select($_GET['id'])
        ]);
    }

    static function remove() {
        $contact = Contact::delete($_GET['id']);
        if ($contact) {
            header('Location: '.BASEURL.'dashboard');
        }
    }

    static function showData() {
        $list = Contact::select();
        return $list;
    }
}

?>