<?php

use alpharooq\kernel\space\model;

class modelKomicho extends model
{
    public function __construct ()
    {
        // $this->db = $this->db();
    }
    public function name ()
    {
        return [
            'username' => 'komicho',
            'password' => md5('password')
        ];
    }
}
