<?php
interface PessoaDAO {
    public function ler();
    public function criar($nome, $idade);
    public function atualizar($nome, $novaIdade);
    public function remover($nome);
}
?>