<?php
require_once 'Crud.php';

class Teste extends Crud{

    private $teste_1;
    private $teste_2;
    private $teste_3;
    private $teste_4;
    private $teste_5;
    private $teste_6;
    private $teste_7;
    private $teste_8;
    private $teste_9;
    private $teste_10;
    private $id_aluno;
    private $id_usuario;

    public function setTeste_1($param) {
        $this->teste_1 = $param;
    }

    public function getTeste_1() {
        return $this->teste_1;
    }

    public function setTeste_2($param) {
        $this->teste_2 = $param;
    }

    public function getTeste_2() {
        return $this->teste_2;
    }

    public function setTeste_3($param) {
        $this->teste_3 = $param;
    }

    public function getTeste_3() {
        return $this->teste_3;
    }

    public function setTeste_4($param) {
        $this->teste_4 = $param;
    }

    public function getTeste_4() {
        return $this->teste_4;
    }

    public function setTeste_5($param) {
        $this->teste_5 = $param;
    }

    public function getTeste_5() {
        return $this->teste_5;
    }
    
    public function setTeste_6($param) {
        $this->teste_6 = $param;
    }

    public function getTeste_6() {
        return $this->teste_6;
    }
    
    public function setTeste_7($param) {
        $this->teste_7 = $param;
    }

    public function getTeste_7() {
        return $this->teste_7;
    }
    
    public function setTeste_8($param) {
        $this->teste_8 = $param;
    }

    public function getTeste_8() {
        return $this->teste_8;
    }
    
    public function setTeste_9($param) {
        $this->teste_9 = $param;
    }

    public function getTeste_9() {
        return $this->teste_9;
    }
    
    public function setTeste_10($param) {
        $this->teste_10 = $param;
    }

    public function getTeste_10() {
        return $this->teste_10;
    }
    
    public function setId_aluno($param) {
        $this->id_aluno = $param;
    }

    public function getId_aluno() {
        return $this->id_aluno;
    }
    
    public function setId_usuario($param) {
        $this->id_usuario = $param;
    }

    public function getId_usuario() {
        return $this->id_usuario;
    }
    
    public function inserir_teste() {
        try {
            $sql = "INSERT INTO teste (teste_1, teste_2, teste_3, teste_4, teste_5, teste_6, teste_7, teste_8, teste_9, teste_10, aluno_id_aluno, usuario_id_usuario) "
                    . "VALUES (:teste_1, :teste_2, :teste_3, :teste_4, :teste_5, :teste_6, :teste_7, :teste_8, :teste_9, :teste_10, :id_aluno, :id_usuario)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':teste_1', $this->teste_1);
            $stmt->bindParam(':teste_2', $this->teste_2);
            $stmt->bindParam(':teste_3', $this->teste_3);
            $stmt->bindParam(':teste_4', $this->teste_4);
            $stmt->bindParam(':teste_5', $this->teste_5);
            $stmt->bindParam(':teste_6', $this->teste_6);
            $stmt->bindParam(':teste_7', $this->teste_7);
            $stmt->bindParam(':teste_8', $this->teste_8);
            $stmt->bindParam(':teste_9', $this->teste_9);
            $stmt->bindParam(':teste_10', $this->teste_10);
            $stmt->bindParam(':id_aluno', $this->id_aluno);
            $stmt->bindParam(':id_usuario', $this->id_usuario);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir teste <br>';
            echo $ex->getMessage();
        }
    }
    
    public function ler_teste() {
        try {
            $sql = "SELECT * FROM teste, aluno where teste.aluno_id_aluno=aluno.id_aluno";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os dados <br>';
            echo $exc->getMessage();
        }

    }
}
