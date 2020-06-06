<?php

class crud 
{
    
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $name = 'mathresult';
    var $con;

    function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->name);
    }

    function insertdata($Nama, $Email, $Scores){

        $sql = "insert into hasil values('$Nama', '$Email', '$Scores')";
        mysqli_query($this->con, $sql);
	}
}
