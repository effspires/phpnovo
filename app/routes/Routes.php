<?php
    namespace app\routes;

    class Routes {
        public static function get() {
            return [
                'get' => [
                    '/' => 'HomeController@index',
                    '/update/[0-9]+' => 'UserController@index'
                ],
                'post' => []
            ];
        }
    }