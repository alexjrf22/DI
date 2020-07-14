
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <h1>Novo Cliente</h1>

        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

                        <label>Nome: </label>
                        <input type="text" id="nome" name="nome"><br>

                        <label>Email: </label>
                        <input type="text" id="email" name="email"><br>
 
                        <input type="submit" name="Enviar" value="Enviar">

        </form>

       <?php
       
              require_once './Clientes.php';
              require_once './MapClientes.php';
              require_once './Conexao.php';
                  
                  
                if(isset($_POST['Enviar'])):
                    
                   $nome = $_POST['nome'];
                   $email = $_POST['email'];

                   $cliente = new Clientes();

                   $cliente->setNome($nome);
                   $cliente->setEmail($email);
                   $cliente->setId('null');

                   $MapClientes = new MapClientes($db, $cliente);

                   $MapClientes->inserir();
                   
                   unset($nome);
                   unset($email);
                   
                   header("location:index.php"); 
                        
                endif;
        ?>


    </body>
</html>
