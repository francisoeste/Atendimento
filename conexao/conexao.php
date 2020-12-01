<?php

class Sql extends PDO {

    private $conn;

    public function __construct() {
        
        $this->conn = new PDO("mysql:dbanem=atendimento;host=localhost" , "root", "");

    }

    private function setParams($statment, $parameters = array()) {

        foreach ($parameters as $key => $value) {

            $this->setParam($key, $value);

        }

    }

    private function setParam($statment, $key, $value) {

        $statment->bindParam($key, $value);
    }

    public function query($rowQuery, $params = array()){

        $stmt = $this->conn->prepare($rowQuery);

        $this->setParams($stmt, $params);

        return $stmt->execute();
    }
}

?>