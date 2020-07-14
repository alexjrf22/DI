<?php   

    if (isset($_GET['alterar']) && isset($_GET['id'])&& isset($_GET['nome'])&& isset($_GET['email']))
    {
        
       require_once './Clientes.php';
       
       $id   = $_GET['id'];
       $nome = $_GET['nome'];
       $email= $_GET['email'];
       
       $cliente = new Clientes();
       $cliente->setId($id);
       $cliente->setNome($nome);
       $cliente->setEmail($email);  
       
    }
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Digite os novos dados do Cliente</h1>
        
        <form name="Alterar Dados" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            
            <label>Nome: </label>
            <input type="text" id="nome" name="nome" value="<?php echo $cliente->getNome(); ?>"><br>
            
            <label>Email: </label>
            <input type="text" id="email" name="email" value="<?php echo $cliente->getEmail(); ?>"><br>
            
            <input type="hidden" id="id" name="id" value="<?php echo $cliente->getId(); ?>">

            <input type="submit" name="Alterar" value="Alterar">
            
        </form>
      
    </body>
</html>

<?php
    
    if (isset($_POST['Alterar']))
    {
        require_once './Clientes.php';
        require_once './Conexao.php';
        require_once './MapClientes.php';
        
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $cliente = new Clientes();
        $cliente->setId($id);
        $cliente->setNome($nome);
        $cliente->setEmail($email);
        
        $newsData = new MapClientes($db, $cliente);
        
        $newsData->atualizar();
        
        header("location:index.php");
        
        
    }


