<?php

include_once 'Conectar.php';

class Noticia
{

    private $id;
    private $titulo;
    private $subtitulo;
    private $data;
    private $corpo;
    private $imagem;
    private $con;

    function getId()
    {
        return $this->id;
    }

    function getTitulo()
    {
        return $this->titulo;
    }

    function getSubtitulo()
    {
        return $this->subtitulo;
    }

    function getData()
    {
        return $this->data;
    }

    function getCorpo()
    {
        return $this->corpo;
    }

    function getImagem()
    {
        return $this->imagem;
    }

    function setId($id)
    {
        $this->id = $id;
    }

    function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }

    function setData($data)
    {
        $this->data = $data;
    }

    function setCorpo($corpo)
    {
        $this->corpo = $corpo;
    }

    function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }

    function salvar()
    {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("CALL salvar_noticia(:id, :titulo, :subtitulo, :data, :corpo, :imagem)");
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->bindValue(':titulo', $this->titulo, PDO::PARAM_STR);
            $sql->bindValue(':subtitulo', $this->subtitulo, PDO::PARAM_STR);
            $sql->bindValue(':data', date('Y-m-d'), PDO::PARAM_STR);
            $sql->bindValue(':corpo', $this->corpo, PDO::PARAM_STR);
            $sql->bindValue(':imagem', $this->imagem, PDO::PARAM_STR);
            

            if ($sql->execute() == 1) {
                return "cadastrado";
            } else {
                return "erro";
            }
        } catch (PDOException $exc) {
            echo "Erro ao salvar " . $exc->getMessage();
        }
    }

    function editar()
    {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("UPDATE noticia SET titulo = ?, subtitulo = ?, data = ?, corpo = ?, imagem = ? WHERE id = ?");
            $sql->bindValue(1, $this->titulo, PDO::PARAM_STR);
            $sql->bindValue(2, $this->subtitulo, PDO::PARAM_STR);
            $sql->bindValue(3, $this->data, PDO::PARAM_STR);
            $sql->bindValue(4, $this->corpo, PDO::PARAM_STR);
            $sql->bindValue(5, $this->imagem, PDO::PARAM_STR);
            $sql->bindValue(6, $this->id, PDO::PARAM_STR);


            return $sql->execute() == 1 ? TRUE : FALSE;
        } catch (PDOException $exc) {
            echo "Erro ao editar " . $exc->getMessage();
        }
    }

    function consultar()
    {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("SELECT * FROM noticia ORDER BY id DESC");

            if ($sql->execute() == 1) {
                return $sql->fetchAll();
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo "Erro ao consultar " . $exc->getMessage();
        }
    }

    function consultarPorID()
    {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("SELECT * from noticia WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_INT);

            return $sql->execute() == 1 ? $sql->fetchAll() : false;
        } catch (PDOException $exc) {
            echo "Erro ao consultar" . $exc->getMessage();
        }
    }

    function excluir()
    {
        try {
            $this->con = new Conectar();
            $sql = $this->con->prepare("DELETE from noticia WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_INT);

            return $sql->execute() == 1 ? "Excluído com sucesso" : "Erro ao excluir";
        } catch (PDOException $exc) {
            echo "Erro ao excluir" . $exc->getMessage();
        }
    }
}
