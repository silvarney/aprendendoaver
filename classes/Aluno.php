<?php
require_once 'Crud.php';

class Aluno extends Crud{
    private $nome;
    private $nascimento;
    private $fone;
    private $mae;
    private $endereco;
    private $escola;
    private $id_usuario;
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    public function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }
    public function getNascimento() {
        return $this->nascimento;
    }
    
    public function setFone($fone) {
        $this->fone = $fone;
    }
    public function getFone() {
        return $this->fone;
    }
    
    public function setMae($mae) {
        $this->mae = $mae;
    }
    public function getMae() {
        return $this->mae;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEscola($escola) {
        $this->escola = $escola;
    }
    public function getEscola() {
        return $this->escola;
    }
    
    public function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    public function getId_usuario() {
        return $this->id_usuario;
    }
    
    public function inserir_aluno() {
        try {
            $sql = "INSERT INTO aluno (nome_aluno, nascimento_aluno, fone_aluno, mae_aluno, endereco_aluno, escola_aluno, usuario_id_usuario) "
                    . "VALUES (:nome, :nascimento, :fone, :mae, :endereco, :escola, :id_usuario)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':nascimento', $this->nascimento);
            $stmt->bindParam(':fone', $this->fone);
            $stmt->bindParam(':mae', $this->mae);
            $stmt->bindParam(':endereco', $this->endereco);
            $stmt->bindParam(':escola', $this->escola);
            $stmt->bindParam(':id_usuario', $this->id_usuario);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir aluno <br>';
            echo $ex->getMessage();
        }
    }
    
    public function ler_alunos($id) {
        try {
            $sql = "SELECT * FROM aluno WHERE usuario_id_usuario = :id";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler alunos <br>';
            echo $exc->getMessage();
        }
    }
}
