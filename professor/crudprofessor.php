<?php
##permite acesso as variaves dentro do aquivo conexao
require_once('conexao.php');

function isBlank($str) {
    return !isset($str) || trim($str) === '';
}

## Função para verificar se um número é inteiro
function isInteger($num) {
    return is_numeric($num) && intval($num) == $num;
}

## Função para verificar se uma string contém apenas texto (sem tags ou scripts)
function isText($str) {
    return !preg_match('/<script[^>]*>|<\/script>|<.*?[^>]>/i', $str);
}

##cadastrar
if(isset($_GET['cadastrar'])){
        ##dados recebidos pelo metodo GET
        $nome = $_GET["nome"];
        $cpf = $_GET["cpf"];
        $idade = $_GET["idade"];
        $datanascimento = $_GET["datanascimento"];
        $endereco = $_GET["endereco"];
        $estatus = $_GET["estatus"];

        ## Validações dos campos
    if (
        isBlank($nome) || !isText($nome) ||
        isBlank($cpf) || !isText($cpf) || 
        isBlank($idade) || !isInteger($idade) ||
        isBlank($datanascimento) ||
        isBlank($endereco) || !isText($endereco) ||
        isBlank($estatus) || !isText($estatus)
    ) {
        echo "<script> alert('Por favor, preencha todos os campos corretamente antes de cadastrar.')
        window.location.href = 'cadprofessor.php';
         </script>";
    } else {

        ##codigo SQL
        $sql = "INSERT INTO professor(nome,cpf,idade,datanascimento,endereco,estatus) 
                VALUES('$nome','$cpf','$idade','$datanascimento',' $endereco','$estatus')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
            echo "<script> alert('OK! O professor $nome foi Incluido com sucesso!!!')
            window.location.href = 'listaprofessores.php';
            </script>";

        }
    }
        }

        
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST 
 $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $idade = $_POST["idade"];
    $datanascimento = $_POST["datanascimento"];
    $endereco = $_POST["endereco"];
    $estatus = $_POST["estatus"];

   
      ##codigo sql
    $sql = "UPDATE  professor SET nome= :nome, cpf= :cpf, idade= :idade, datanascimento= :datanascimento, endereco= :endereco, estatus= :estatus WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nome',$nome, PDO::PARAM_STR);
    $stmt->bindParam(':cpf',$cpf, PDO::PARAM_STR);
    $stmt->bindParam(':idade',$idade, PDO::PARAM_INT);
    $stmt->bindParam(':datanascimento',$datanascimento, PDO::PARAM_STR);
    $stmt->bindParam(':endereco',$endereco, PDO::PARAM_STR);
    $stmt->bindParam(':estatus',$estatus, PDO::PARAM_STR);
    $stmt->execute();
 


   if($stmt->execute())
       {
        echo "<script> alert('OK! O professor $nome foi alterado com sucesso!!!')
           window.location.href = 'listaprofessores.php';
            </script>";
        } 

}        


##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    $sql ="DELETE FROM `professor` WHERE id={$id}";
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    if($stmt->execute())
        {
            echo "<script> alert('OK! O professor $nome foi excluído com sucesso!!!')
            window.location.href = 'listaprofessores.php';
            </script>";
        }

}