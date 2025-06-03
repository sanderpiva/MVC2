<?php
// models/Prova_model.php

class ProvaModel {
    private $db;

    public function __construct($conexao) {
        $this->db = $conexao;
    }

    public function getAllProvas() {
        $stmt = $this->db->query("SELECT * FROM prova");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProvaById($id) {
        $stmt = $this->db->prepare("SELECT * FROM prova WHERE id_prova = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createProva($data) {
        $sql = "INSERT INTO prova (titulo, descricao, data_prova) VALUES (:titulo, :descricao, :data_prova)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':titulo' => $data['titulo'],
            ':descricao' => $data['descricao'],
            ':data_prova' => $data['data_prova']
        ]);
    }

    public function updateProva($data) {
        $sql = "UPDATE prova SET titulo = :titulo, descricao = :descricao, data_prova = :data_prova WHERE id_prova = :id_prova";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':titulo' => $data['titulo'],
            ':descricao' => $data['descricao'],
            ':data_prova' => $data['data_prova'],
            ':id_prova' => $data['id_prova']
        ]);
    }

    public function deleteProva($id) {
        $stmt = $this->db->prepare("DELETE FROM prova WHERE id_prova = :id");
        return $stmt->execute([':id' => $id]);
    }
}
?>
