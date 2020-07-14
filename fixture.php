<?php

require_once './Conexao.php';

echo "#### Executando Fixture ####\n" . "<br><br>";

echo "Removendo Tabela" . "<br><br>";

$db->query("DROP TABLE IF EXISTS clientes");

echo " - OK\n" . "<br><br>";

echo "Criando tabela" . "<br><br>";

$db->query
        (
            "CREATE TABLE clientes("
            . "id INT NOT NULL AUTO_INCREMENT,"
            . "nome VARCHAR(45) CHARACTER SET 'utf8' NULL,"
            . "email VARCHAR(60),"
            . "PRIMARY KEY(id));"
            
        );

echo " - OK\n" . "<br><br>";

echo "#### Concluído ####\n";
        
