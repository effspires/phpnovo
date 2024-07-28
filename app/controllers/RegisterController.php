<?php
    namespace app\controllers;

    class RegisterController extends Controller {
        public function index() {
            $this->view('register', ['title' => 'Cadastro']);
        }
    }