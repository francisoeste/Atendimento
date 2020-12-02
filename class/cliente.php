<?php

class Cliente {

    private $codigo;
    private $nome;
    private $cnpj;
    private $insc_estadual;
    private $razao_social;
    private $fantasia;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $cep;
    private $referencia;
    private $obs;
    private $insc_municipal;
    private $cpf;
    private $telefone;

    public function getCodigo() {

        return $this->codigo;

    }

    public function setCodigo($value) {

        $this->codigo = $value;

    }

    public function getNome() {

        return $this->nome;

    }

    public function setNome($value) {

         $this->nome = $value;

    }

    public function getCnpj() {

        return $this->cnpj;

    }

    public function setCnpj($value) {

        $this->cnpj = $value;

    }

    public function getInsc_Estadual() {

        return $this->insc_estadual;

    }

    public function setInsc_Estadual($value) {

        $this->insc_estadual = $value;

    }

    public function getRazao_Social() {

        return $this->razao_social;

    }

    public function setRazao_Social($value) {

        $this->razao_social = $value;

    }

    public function getFantasia() {

        return $this->fantasia;

    }

    public function setFantasia($value) {

        $this->fantasia = $value;

    }

    public function getEndereco() {

        return $this->endereco;

    }

    public function setEndereco($value) {

        $this->endereco = $value;

    }

    public function getNumero() {

        return $this->numero;

    }

    public function setNumero($value) {

        $this->numero = $value;

    }

    public function getComplemento() {

        return $this->complemento;

    }

    public function setComplemento($value) {

        $this->complemento = $value;

    }

    public function getBairro() {

        return $this->bairro;

    }

    public function setBairro($value) {

        $this->bairro = $value;

    }

    public function getCep() {

        return $this->cep;

    }

    public function setCep($value) {

        $this->cep = $value;

    }

    public function getReferencia() {

        return $this->referencia;

    }

    public function setReferencia($value) {

        $this->referencia = $value;

    }

    public function getObs() {

        return $this->obs;

    }

    public function setObs($value) {

        $this->obs = $value;

    }

    public function getInsc_Municipal() {

        return $this->insc_municipal;

    }

    public function setInsc_Municipal($value) {

        $this->insc_municipal = $value;

    }

    public function getCpf() {

        return $this->cpf;

    }

    public function setCpf($value) {

        $this->cpf = $value;

    }

    public function getTelefone() {

        return $this->telefone;

    }

    public function setTelefone($value) {

        $this->telefone = $value;

    }

    public function setDados($dados) {

        $this->setCodigo($dados['CODIGO']);
        $this->setNome($dados['CLIENTE']);
        $this->setCnpj($dados['CNPJ']);
        $this->setInsc_Estadual($dados['INSC_ESTADUAL']);
        $this->setRazao_Social($dados['RAZAO']);
        $this->setFantasia($dados['FANTASIA']);
        $this->setEndereco($dados['ENDERECO']);
        $this->setNumero($dados['NUMERO']);
        $this->setComplemento($dados['COMPLEMENTO']);
        $this->setCep($dados['CEP']);
        $this->setReferencia($dados['REFERENCIA']);
        $this->setInsc_Estadual($dados['INSC_MUNICIPAL']);
        $this->setCpf($dados['CPF']);
        $this->setTelefone($dados['TELEFONE']);

    }

    public function loadId($id) {

        $sql = new Sql();

        $resultado = $sql->select("SELECT * FROM cliente WHERE codigo = :ID ", array(
            ":ID"=>$id
        ));

        if (count($resultado) > 0) {

            $this->setDados[$resultado[0]];

        }

    }

    //CADASTRA O PRODUTO ATRAVEZ DE STORAGE_PROCEDURE///
    public function insertCliente() {

        $sql = new Sql();

        $resultado = $sql->select("CALL sp_cliente_insert(:CLIENTE)", array(
            ':CLIENTE'=>$this->getNome()
        ));

        //if(count($resultado)) {
           // $this->setDados($resultado[0]);
      //  }

    }

    public function loadSearch($search) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM cliente WHERE cliente LIKE %:NOME% ", array(
            ":NOME"=>$search
        ));

    }

    public function __toString() {
        
        return json_encode(array(

            "CODIGO"=>$this->getCodigo(),
            "CLIENTE"=>$this->getNome()

        ));

    }
}

?>