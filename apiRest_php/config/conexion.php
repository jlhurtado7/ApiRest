<?php

class Conectar{
    protected $dbh;

    protected function Conexion(){
        try {
            // Version de QA
            //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=jl_webservice","root","");
            // Producción Hostinger
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=u218945770_apirestphpmysq","u218945770_apirestphp","1234Admin");
            return $conectar;
        } catch (Exception $e) {
            print "¡error DB!: ". $e->getMessage()."<br/>";
            die();
        }
    }

    public function set_names(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

}
?>