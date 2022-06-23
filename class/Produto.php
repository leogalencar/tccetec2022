<?php

include_once 'Conectar.php';

class Produto {

    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $con;

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getPreco() {
        return $this->preco;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function salvar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("INSERT INTO produto VALUES(null, :nome, :descricao, :preco)");
            $sql->bindValue(':nome', $this->nome, PDO::PARAM_STR);
            $sql->bindValue(':descricao', $this->descricao, PDO::PARAM_STR);
            $sql->bindValue(':preco', $this->preco, PDO::PARAM_STR);
            
            if($sql->execute() == 1){
                return "cadastrado";
            }else{
                return "erro";
            }
            
        } catch (PDOException $exc) {
            echo "Erro ao salvar " . $exc->getMessage();
        }
    }//salvar
    
    function editar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("UPDATE produto SET nome = ?, descricao = ?, preco = ? WHERE id = ?");
            $sql->bindValue(1, $this->nome, PDO::PARAM_STR);
            $sql->bindValue(2, $this->descricao, PDO::PARAM_STR);
            $sql->bindValue(3, $this->preco, PDO::PARAM_STR);
            $sql->bindValue(4, $this->id, PDO::PARAM_STR);

            
            return $sql->execute() == 1 ? TRUE : FALSE;
            
        } catch (PDOException $exc) {
            echo "Erro ao editar " . $exc->getMessage();
        }
    }//salvar
    
    function consultar() {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("SELECT * FROM produto");
                        
            if($sql->execute() == 1){
                return $sql->fetchAll();
            }else{
                return false;
            }            
        } catch (PDOException $exc) {
            echo "Erro ao consultar " . $exc->getMessage();
        }
    }//consultar

    function consultarPorID(){
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("SELECT * from produto WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_INT);
            
            return $sql->execute() == 1 ? $sql->fetchAll() : false;

        } catch (PDOException $exc) {
            echo "Erro ao consultar" . $exc->getMessage();
        }
    } //salvar

    function excluir(){
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("DELETE from produto WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_INT);
            
            return $sql->execute() == 1 ? "Excluído com sucesso" : "Erro ao excluir";

        } catch (PDOException $exc) {
            echo "Erro ao excluir" . $exc->getMessage();
        }
    } //salvar

}

//fim class
