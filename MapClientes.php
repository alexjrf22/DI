<?php

require_once './Clientes.php';
require_once './Conexao.php';

class MapClientes 
{
    private $db;
    private $clientes;
    
    public function __construct(\PDO $db, Clientes $clientes)
    {
        $this->db = $db;
        $this->clientes = $clientes;
    }
    
    public function listar()
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function inserir()
    {
        $query = "INSERT INTO clientes (nome, email) VALUES (:nome, :email)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":nome", $this->clientes->getNome(), PDO::PARAM_STR);
        $stmt->bindValue(":email", $this->clientes->getEmail(), PDO::PARAM_STR);
        return $stmt->execute();
    
    }
    
    public function atualizar()
    {
        $query = "UPDATE clientes SET nome = :nome, email= :email WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->clientes->getId());
        $stmt->bindValue(':nome', $this->clientes->getNome());
        $stmt->bindValue(':email', $this->clientes->getEmail());
        return $stmt->execute();
    }
    
    public function deletar()
    {
        $query = "DELETE FROM clientes WHERE id=:id LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->clientes->getId(), PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    public function listarUmRegistro()
    {
        $query = "SELECT * FROM clientes WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $this->clientes->getId(), PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
}
