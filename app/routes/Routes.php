<?php
    namespace app\routes;

    class Routes {
        public static function get() {
            return [
                'get' => [
                    '/' => 'HomeController@index',
                    '/user/edit/[0-9]+' => 'UserController@edit',
                    '/name/[a-z]+' => 'UserController@index'
                ],
                'post' => []
            ];
        }
    }