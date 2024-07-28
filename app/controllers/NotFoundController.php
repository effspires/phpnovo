<?php
    namespace app\controllers;

    class NotFoundController extends Controller{
        public function index() {
            dd('Erro 404.');
            // $this->view('Home', ['title' => 'Home']);
        }
    }