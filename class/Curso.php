<?php

include_once 'Conectar.php';

class Curso
{

    private $id;
    private $titulo;
    private $modalidade;
    private $eixotec;
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

    function getModalidade()
    {
        return $this->modalidade;
    }

    function getEixotec()
    {
        return $this->eixotec;
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

    function setModalidade($modalidade)
    {
        $this->modalidade = $modalidade;
    }

    function setEixotec($eixotec)
    {
        $this->eixotec = $eixotec;
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
            $sql = $this->con->prepare("CALL salvar_curso(:id, :titulo, :modalidade, :eixotec, :corpo, :imagem)");
            $sql->bindValue(':id', $this->id, PDO::PARAM_INT);
            $sql->bindValue(':titulo', $this->titulo, PDO::PARAM_STR);
            $sql->bindValue(':modalidade', $this->modalidade, PDO::PARAM_STR);
            $sql->bindValue(':eixotec', $this->eixotec, PDO::PARAM_STR);
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
            $sql = $this->con->prepare("UPDATE curso SET titulo = ?, modalidade = ?, eixotec = ?, corpo = ?, imagem = ? WHERE id = ?");
            $sql->bindValue(1, $this->titulo, PDO::PARAM_STR);
            $sql->bindValue(2, $this->modalidade, PDO::PARAM_STR);
            $sql->bindValue(3, $this->eixotec, PDO::PARAM_STR);
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
            $sql = $this->con->prepare("SELECT * FROM curso ORDER BY id DESC");

            if ($sql->execute() == 1) {
                return $sql->fetchAll();
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            echo "Erro ao consultar " . $exc->getMessage();
        }
    }

    function consultarPorNome($filtro_modalidade, $filtro_eixotec)
    {
        try {
            $this->con = new Conectar();
            if($filtro_modalidade == 0 && $filtro_eixotec == 0){
                $sql = $this->con->prepare("SELECT * FROM curso ORDER BY titulo ASC");
            }
            else if($filtro_modalidade == 0){
                $sql = $this->con->prepare("SELECT * FROM curso WHERE eixotec = '{$filtro_eixotec}' ORDER BY titulo ASC");
            }
            else if($filtro_eixotec == 0){
                $sql = $this->con->prepare("SELECT * FROM curso WHERE modalidade = '{$filtro_modalidade}' ORDER BY titulo ASC");
            }
            else{
                $sql = $this->con->prepare("SELECT * FROM curso WHERE modalidade = '{$filtro_modalidade}' and eixotec = '{$filtro_eixotec}' ORDER BY titulo ASC");
            }
            

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
            $sql = $this->con->prepare("SELECT * from curso WHERE id = ?");
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
            $sql = $this->con->prepare("DELETE from curso WHERE id = ?");
            $sql->bindValue(1, $this->id, PDO::PARAM_INT);

            return $sql->execute() == 1 ? "Excluído com sucesso" : "Erro ao excluir";
        } catch (PDOException $exc) {
            echo "Erro ao excluir" . $exc->getMessage();
        }
    }
}
