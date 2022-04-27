<?php

class About extends Controller {

    public function index() {

        $data['page_title'] = 'About';
        self::viewPage('about', $data);
    }

}
