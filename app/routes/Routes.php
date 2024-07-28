<?php
    namespace app\routes;

    class Routes {
        public static function get() {
            return [
                'get' => [
                    '/' => 'HomeController@index',
                    '/register' => 'RegisterController@index'
                    // '/name/[a-z]+' => 'UserController@index'
                ],
                'post' => []
            ];
        }
    }