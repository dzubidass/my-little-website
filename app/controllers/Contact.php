<?php

class Contact extends Controller {

    public function index() {

        $data['page_title'] = 'Contact';
        self::viewPage('contact', $data);
    }

    public function showMail() {
        echo('New mail');
    }

}
