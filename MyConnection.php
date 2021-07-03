<?php
class MyConnection {
    private $connection;
    public static function getConnection(){
        $this->connection=new mysqli("localhost","root","root","empsapato") or print(msqli_error());
        return $this->connection;
    }
}
