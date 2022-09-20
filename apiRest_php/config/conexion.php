<?php

class Conectar{
    protected $dbh;

    protected function Conexion(){
        try {
            // Version de QA
            //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=jl_webservice","root","");
            //Producción Godaddy
            //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=jl_webservice","root","");
            // Producción Heroku
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=jl_webservice","root","");
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