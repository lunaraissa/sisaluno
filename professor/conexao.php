<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

<?php 
//Criar as constantes com as credencias de acesso ao banco de dados
define('HOST', '10.70.230.53:3306'); //servidor
define('USUARIO', 'sisaluno'); //usuario
define('SENHA', 'sisaluno2023'); //senha da conexão
define('DATABASE', 'sisaluno'); //nome da database

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {

    $conexao = new pdo('mysql:host=' . HOST . ';database=' .
                                    DATABASE, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}


?>


</body>
</html>