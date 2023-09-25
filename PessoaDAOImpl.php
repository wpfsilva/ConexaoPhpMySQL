<?php
require_once 'PessoaDAO.php';

class PessoaDAOImpl implements PessoaDAO {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function ler() {
        $sql = 'SELECT * FROM pessoas';
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome, $idade) {
        $sql = 'INSERT INTO pessoas (nome, idade) VALUES (:nome, :idade)';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':idade', $idade);
        return $stmt->execute();
    }

    public function atualizar($nome, $novaIdade) {
        $sql = 'UPDATE pessoas SET idade = :idade WHERE nome = :nome';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':idade', $novaIdade);
        return $stmt->execute();
    }

    public function remover($nome) {
        $sql = 'DELETE FROM pessoas WHERE nome = :nome';
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        return $stmt->execute();
    }
}
?>
