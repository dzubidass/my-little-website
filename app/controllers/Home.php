<?php

class Home extends Controller {

    public function index() {

        $image_class = self::loadModel('image_class');
        dump($image_class);

        $data['page_title'] = 'Home';
        self::viewPage('index', $data);
    }
}
