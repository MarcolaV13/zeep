<?php
    

    if(isset($_POST['enviar'])){
        // Parametros:
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $textarea = $_POST['textarea'];

        //Config para conectar ao banco de dados;
        $pdo = new PDO('mysql:host=localhost;dbname=site_zeep','root','');

        $sql = $pdo->prepare("INSERT INTO `formulario_de_contato` VALUES 
        (null,?,?,?)");
        $sql->execute(array($nome,$email,$textarea));

        echo '<div class="alert alert-info" role="alert">
                Sua mensagem foi enviada com sucesso!
            </div>';
   }
?>