<?php

try
{
    $db = new \PDO("mysql:host=localhost; dbname=DI" , 'root', '');
}
catch (\PDOException $erro)
{
    echo "Não foi possível conectar ao Banco de Dados. " . $erro->getMessage();
}

    

