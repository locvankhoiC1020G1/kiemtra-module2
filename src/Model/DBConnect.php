<?php

class DBConnect
{
protected $dsn;
protected $user;
protected $password;
public function __construct()
{
    $this->dsn ="mysql:host=localhost;dbname=marketmanager2";
    $this->user ="root";
    $this->password ="";
}

    public function connect()
    {

        try {
            return new PDO($this->dsn,$this->user,$this->password);
        }
        catch (\mysql_xdevapi\Exception $exception){
            echo "máy chủ bảo trì";
            exit();
        }
    }
}