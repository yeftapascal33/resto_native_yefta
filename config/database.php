<?php
class database{
    private $db = [
        'host' =>'localhost',
        'username' => 'root',
        'password' => 'yefta123',
        'database' => 'resto_native'
    ];

    public function data(){
        return $this->db;
    }
}