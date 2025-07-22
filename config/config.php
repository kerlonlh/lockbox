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

    'security' => [
        'first_key' => 'chave 1',
        'second_key' => 'chave 2'
    ]

/*
'security' => [
    'first_key'  => 'mLwzbP3xL7ACLbQQxxx4Tkqvc8mHuVEPq0FuaskL0GQ=',
    'second_key' => 'bdqXjchRULAGy1fnVtQ1VEovZu57tuSkuRWyxi2PDXtUT9Lfzeiq7YubX+m/ZZr3tj/3zrAhmdYchWm//uvmsA=='
]

*/
];
