<!--deletando cliente-->
<?php                
    if (isset($_GET['deletar']) && isset($_GET['id']))
    {

       require_once './Clientes.php';
       require_once './MapClientes.php';
       require_once './Conexao.php';
       

       $id = $_GET['id'];

       $cliente = new Clientes();
       $cliente->setId($id);
       $deletar = new MapClientes($db, $cliente);

       $deletar->deletar();

       header("location:index.php"); 


    }
    
