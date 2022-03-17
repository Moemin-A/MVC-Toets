<?php
class Countries extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $this->userModel = $this->model('Country');

        $data = [
            'title' => 'Home page',
            'users' => $country
        ];

        $this->view('index', $data);
    }
}
