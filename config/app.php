<?php
return [
    /*
    # KEY
    -> Is very important that you are specifically your value
    */
    'key' => 'set_key',
    /*
    # URL
    -> Put your link application
    */
    'url' => 'http://localhost:8808/',
    /*
    # LANG
    -> Put the language file name
    */
    'lang' => 'ar',
    /*
    # JSONSERVER
    -> Is very important that you are specifically your value
    */
    'josn_server' => true,
    /*
    # Databases
    -> You can choose one of two types of databases - sqlite OR mysql
    */
    'db' => [
        'type' => 'mysql', // mysql
        'info' => [
            'host' => 'localhost', // name server
            'user' => 'root', // user db
            'pass' => 'root', // pass db
            'name' => 'db' // name db
        ]
    ]
];
