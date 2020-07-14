<?php

    require_once './Conexao.php';
    require_once './Clientes.php';
    require_once './MapClientes.php';
    require_once './formClientes.php';
    
    
    //listando clientes
    $clientes = new Clientes();
    $MapClientes = new MapClientes($db, $clientes);
    $ListaCli = $MapClientes->listar();
    
    require_once './listaClientes.php';
    
    



