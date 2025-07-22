<?php

return [
    'database' => [
        'driver' => 'sqlite',
        'database' => base_path('database/database.sqlite')
    ],
    /*    'databaseMysql' => [
        'driver' => 'mysql',
        'host' => 'localhost',
        'port' => 3306,
        'dbname' => 'bookwise',
        'user' => 'root',
        'password' => 'root'
    ]
*/
    /*
    'security' => [
        'first_key' => 'chave 1',
        'second_key' => 'chave 2'
    ]
*/

    'security' => [
        'first_key'  => env('ENCRYPT_FIRST_KEY', base64_encode('chave__aleatoria__default')),
        'second_key' => env('ENCRYPT_SECOND_KEY', base64_decode('chave__aleatoria__default_decode')),
    ]


];
