<?php
namespace app\Database\config;

use mysqli;
class connection {
    private string $db_hostName='localhost';
    private string $db_userName='root';
    private string $db_password='';
    private string $db_name='ecommercy';
    private string $db_port='3306';
    public mysqli $connection;
public function __construct()
{
    $this->connection=new mysqli($this->db_hostName,$this->db_userName,$this->db_password,$this->db_name,$this->db_port);
}
public function __destruct()
{
    $this->connection->close() ;
}
}
