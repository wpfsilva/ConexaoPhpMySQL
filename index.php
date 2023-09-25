<?php
require_once 'Pessoa.php';
require_once 'PessoaDAO.php';
require_once 'PessoaDAOImpl.php';
require_once 'ConnectionFactory.php';

$conexao = ConnectionFactory::getConnection('localhost', 'PI2', 'wallde', 'aulapi2');
$pessoaDAO = new PessoaDAOImpl($conexao);

// Criar 4 registros distintos
$pessoaDAO->criar('João', 20);
$pessoaDAO->criar('Maria', 25);
$pessoaDAO->criar('Pedro', 30);
$pessoaDAO->criar('Ana', 35);

// Listar todos os registros
print_r($pessoaDAO->ler());

// Remover dois registros
$pessoaDAO->remover('João');
$pessoaDAO->remover('Maria');

// Listar todos os registros
print_r($pessoaDAO->ler());

// Atualizar um registro
$pessoaDAO->atualizar('Pedro', 40);

// Listar todos os registros
print_r($pessoaDAO->ler());
?>