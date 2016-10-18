<?php
header("Content-Type: text/html;charset=utf-8");

class BaseDeDatos {

    private $con;
function __construct()
{
 $this->con = new PDO('mysql:host=localhost; dbname=base_proyecto_dw',"root","", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
 
 }


     public function sessionData($Usuario) {
        $sql=$this->con->query("CALL userData('$Usuario')");
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
	
	
 
}

?>


