<?php
require_once 'Crud.php';

class Usuario extends Crud{
    private $user;
    private $senha;
    private $nome;
    private $fone;
    private $email;
    private $endereco;
    private $escolaridade;
    private $funcao;
    private $local;
    private $permissao;
    private $nivel;
    
    public function setUser($user) {
        $this->user = $user;
    }
    public function getUser() {
        return $this->user;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }
    
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    
    public function setFone($fone) {
        $this->fone = $fone;
    }
    public function getFone() {
        return $this->fone;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEMail() {
        return $this->email;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setEscolaridade($escolaridade) {
        $this->escolaridade = $escolaridade;
    }
    public function getEscolaridade() {
        return $this->escolaridade;
    }
    
    public function setFuncao($funcao) {
        $this->funcao = $funcao;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    
    public function setLocal($local) {
        $this->local = $local;
    }
    public function getLocal() {
        return $this->local;
    }
    
    public function setPermissao($permissao) {
        $this->permissao = $permissao;
    }
    public function getPermissao() {
        return $this->permissao;
    }
    
    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
    public function getNivel() {
        return $this->nivel;
    }
    
    public function inserir_usuario() {
        try {
            $sql = "INSERT INTO usuario (user_usuario, senha_usuario, nome_usuario, fone_usuario, email_usuario, endereco_usuario, escolaridade_usuario, funcao_usuario, local_usuario, permissao_usuario, nivel_usuario) "
                    . "VALUES (:user, :senha, :nome, :fone, :email, :endereco, :escolaridade, :funcao, :local, :permissao, :nivel)";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':user', $this->user);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':fone', $this->fone);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':endereco', $this->endereco);
            $stmt->bindParam(':escolaridade', $this->escolaridade);
            $stmt->bindParam(':funcao', $this->funcao);
            $stmt->bindParam(':local', $this->local);
            $stmt->bindParam(':permissao', $this->permissao);
            $stmt->bindParam(':nivel', $this->nivel);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir usuario <br>';
            echo $ex->getMessage();
        }
    }
    
    public function login_usuario($user, $senha) {
        try {
            $sql = "SELECT * FROM usuario WHERE user_usuario = :email AND senha_usuario = :senha";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':email', $user);
            $stmt->bindParam(':senha', $senha);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        } catch (Exception $ex) {
            echo 'Falha ao executar login <br>';
            echo $ex->getMessage();
        }
    }
}
