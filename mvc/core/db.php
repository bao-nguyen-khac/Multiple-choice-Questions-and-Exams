<?php

class db{

    public $connect;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "db_ass2";

    function __construct(){
        $this->connect = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->connect, $this->dbname);
        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_query($this->connect, "SET NAMES 'utf8'");

    }
}

?>