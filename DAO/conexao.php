<?php

class Conexao{
    private static $instancia;
        
    public static function getConexao() {
        if (!isset(self::$instancia)) {
            $dbname = "infoweb";
            $host = "localhost";
            $user = "root";
            $senha = "";

            try {
                self::$instancia = new PDO("mysql:dbname=" . $dbname . ";host=" . $host, $user, $senha);
            } catch (Exception $e) {
                echo 'O Erro é: ' . $e;
            }
        }
        return self::$instancia;
    }
}

?>
