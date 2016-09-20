<?php

class ServiceDB {
    
    private $db;
    private $cliente;
    
    public function __construct(\PDO $db, Cliente $cliente) {
        $this->db = $db;
        $this->cliente = $cliente;
    }
    
    public function find($id){
        
        $query = "select * from clientes where id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        
        return $stmt->fetch(\PDO::FETCH_ASSOC);
        
    }
    
    public function listar($ordem = null) {
       
        if ($ordem) {
            $query = "select * from clientes order by {$ordem}";
        } else {
            $query = "select * from clientes";
        }
        
        
        $stmt = $this->db->query($query);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        
    }

    public function inserir() {
        
        $query = "Insert into clientes(nome, email) values (:nome, :email)";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', $this->cliente->getNome());
        $stmt->bindValue(':email', $this->cliente->getEmail());
        
        if ($stmt->execute()) {
            return true;
        }
    }

    public function alterar() {
        
        $query = "update clientes set nome=:nome, email=:email where id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->cliente->getId());
        $stmt->bindValue(':nome', $this->cliente->getNome());
        $stmt->bindValue(':email', $this->cliente->getEmail());
        
        if ($stmt->execute()) {
            return true;
        }
        
    }

    public function deletar($id) {
        
        $query = "delete from clientes where id=:id";
        
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        
        if ($stmt->execute()) {
            return true;
        }
    }
}
