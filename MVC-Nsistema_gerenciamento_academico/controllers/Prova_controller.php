<?php
// controllers/Prova_controller.php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once __DIR__ . '/../models/Prova_model.php';

class Prova_controller {
    private $provaModel;

    public function __construct($conexao) {
        $this->provaModel = new ProvaModel($conexao);
    }

    public function list() {
        $provas = $this->provaModel->getAllProvas();
        include __DIR__ . '/../views/prova/List.php';
    }

    public function showCreateForm() {
        $provaData = null;
        $errors = [];
        include __DIR__ . '/../views/prova/Create_edit.php';
    }

    public function showEditForm($id) {
        if (!$id) {
            displayErrorPage("ID da prova não especificado.", 'index.php?controller=prova&action=list');
            return;
        }
        $provaData = $this->provaModel->getProvaById($id);
        if (!$provaData) {
            displayErrorPage("Prova não encontrada.", 'index.php?controller=prova&action=list');
            return;
        }
        $errors = [];
        include __DIR__ . '/../views/prova/Create_edit.php';
    }

    public function handleCreatePost($postData) {
        $errors = $this->validateProvaData($postData);
        if (!empty($errors)) {
            $provaData = $postData;
            include __DIR__ . '/../views/prova/Create_edit.php';
            return;
        }
        if ($this->provaModel->createProva($postData)) {
            redirect('index.php?controller=prova&action=list&message=' . urlencode("Prova criada com sucesso!"));
        } else {
            displayErrorPage("Erro ao criar prova.", 'index.php?controller=prova&action=showCreateForm');
        }
    }

    public function handleUpdatePost($postData) {
        if (empty($postData['id_prova'])) {
            displayErrorPage("ID da prova não fornecido.", 'index.php?controller=prova&action=list');
            return;
        }
        $errors = $this->validateProvaData($postData);
        if (!empty($errors)) {
            $provaData = $postData;
            include __DIR__ . '/../views/prova/Create_edit.php';
            return;
        }
        if ($this->provaModel->updateProva($postData)) {
            redirect('index.php?controller=prova&action=list&message=' . urlencode("Prova atualizada com sucesso!"));
        } else {
            displayErrorPage("Erro ao atualizar prova.", 'index.php?controller=prova&action=showEditForm&id=' . $postData['id_prova']);
        }
    }

    public function delete($id) {
        if (!$id) {
            displayErrorPage("ID da prova não especificado.", 'index.php?controller=prova&action=list');
            return;
        }
        if ($this->provaModel->deleteProva($id)) {
            redirect('index.php?controller=prova&action=list&message=' . urlencode("Prova excluída com sucesso!"));
        } else {
            displayErrorPage("Erro ao excluir prova.", 'index.php?controller=prova&action=list');
        }
    }

    private function validateProvaData($data) {
        $errors = [];
        if (empty($data['titulo']) || strlen($data['titulo']) < 5) {
            $errors[] = "O título deve ter pelo menos 5 caracteres.";
        }
        if (empty($data['descricao']) || strlen($data['descricao']) < 10) {
            $errors[] = "A descrição deve ter pelo menos 10 caracteres.";
        }
        if (empty($data['data_prova'])) {
            $errors[] = "A data da prova é obrigatória.";
        }
        return $errors;
    }
}
?>
