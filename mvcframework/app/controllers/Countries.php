<?php
class Countries extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {
        $this->userModel = $this->model('Fruit');

        $data = [
            'title' => 'Home page',
            'users' => $countries
        ];

        $this->view('index', $data);
    }
}
