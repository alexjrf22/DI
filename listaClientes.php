<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>

    <body>
          
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET" enctype="multipart/form-data">
         
            <table border="1">
                <h1>Lista De Clientes</h1>

                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                </tr>
                <?php foreach ($ListaCli as $cli): ?>
                <tr>
                    <td><?php echo $cli['id']; ?></td>
                    <td><?php echo $cli['nome']; ?></td>
                    <td><?php echo $cli['email']; ?></td> 
                    <td><a href="listaClientes.php?deletar=deletar&AMP;id=<?php echo $cli['id']; ?>">Deletar</a></td>
                    <td>
                    <a href="alterar.php?alterar=alterar&AMP;id=<?php echo $cli['id']; ?>&AMP;nome=<?php echo $cli['nome']; ?>&AMP;email=<?php echo $cli['email'];?>">Alterar</a></td>
                    
                </tr>

                <?php  endforeach; ?>
                
    
              <?php require_once './deletar.php' ;?>
                    
            </table>
             
        </form>

    </body>
</html>
