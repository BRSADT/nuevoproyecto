<?php

class conexionBdd {
    private $con;
    //$this->con;
    public function __construct()
    {
        //CADENA DE CONEXION PDO(localhost,nombre de la bd, usuario, contraseña)
        $this->con = new PDO('mysql:host=localhost; dbname=Base_proyecto_Dw',"root","");
    }
	
	   public function muestraTodo()
    {
        $r=$this->con->query("SELECT * FROM estados");
        return $r->fetchAll(PDO::FETCH_ASSOC);
    }
 public function registro($Nombre,$Edad,$Pass,$Usuario,$email,$Apellido)
    {
        $sql=$this->con->prepare("insert into persona( Nombre,Edad,Pass,Usuario,email,Apellido, admin) values (?,?,?,?,?,?)");
        
        $sql->bindParam(1, $Nombre);
        $sql->bindParam(2, $Edad);
        $sql->bindParam(3, $Pass);
        $sql->bindParam(4, $Usuario);
		$sql->bindParam(5, $email);
        $sql->bindParam(6, $Apellido);		
		
        $sql->execute();
    }
	
	}