<?php
class ConnectionFactory {
    public static function getConnection($host, $database, $user, $password) {
        try {
            $conexao = new PDO("mysql:host=$host;dbname=$database", $user, $password);
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexao;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }
}
?>
