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
        $nomedisciplina = $_GET["nomedisciplina"];
        $ch = $_GET["ch"];
        $semestre = $_GET["semestre"];
        $idprofessor = $_GET["idprofessor"];

   ## Validações dos campos
   if (
    isBlank($nomedisciplina) || !isText($nomedisciplina) ||
    isBlank($ch) || !isInteger($ch) ||
    isBlank($semestre) ||
    isBlank($idprofessor) || !isText($idprofessor) 
    ) {

    echo "<script> alert('Por favor, preencha todos os campos corretamente antes de cadastrar.')
    window.location.href = 'caddisciplina.php';
     </script>";
} else {

        ##codigo SQL
        $sql = "INSERT INTO disciplina(nomedisciplina,ch,semestre,idprofessor) 
                VALUES('$nomedisciplina','$ch','$semestre','$idprofessor')";

        ##junta o codigo sql a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o sql no banco de dados
        if($sqlcombanco->execute())
            {
            echo "<script> alert('OK! A disciplina $nomedisciplina foi Incluido com sucesso!!!')
            window.location.href = 'listadisciplina.php';
            </script>";

        }
        }
    }
#######alterar
if(isset($_POST['update'])){

    ##dados recebidos pelo metodo POST
    $nomedisciplina = $_POST["nomedisciplina"];
    $ch = $_POST["ch"];
    $id = $_POST["id"];
    $semestre = $_POST["semestre"];
    $idprofessor = $_POST["idprofessor"];
   
      ##codigo sql
    $sql = "UPDATE  disciplina SET nomedisciplina= :nomedisciplina, ch= :ch, semestre= :semestre, idprofessor= :idprofessor WHERE id= :id ";
   
    ##junta o codigo sql a conexao do banco
    $stmt = $conexao->prepare($sql);

    ##diz o paramentro e o tipo  do paramentros
    $stmt->bindParam(':id',$id, PDO::PARAM_INT);
    $stmt->bindParam(':nomedisciplina',$nomedisciplina, PDO::PARAM_STR);
    $stmt->bindParam(':ch',$ch, PDO::PARAM_INT);
    $stmt->bindParam(':semestre',$semestre, PDO::PARAM_STR);
    $stmt->bindParam(':idprofessor',$idprofessor, PDO::PARAM_STR);
    $stmt->execute();

   if($stmt->execute())
       {
        echo "<script> alert('OK! A disciplina $nomedisciplina foi alterada com sucesso!!!')
           window.location.href = 'listadisciplina.php';
            </script>";
        } 

}        

##Excluir
if(isset($_GET['excluir'])){
    $id = $_GET['id'];

    // Usar JavaScript para exibir uma mensagem de confirmação
    echo "<script>
            var confirmation = confirm('Tem certeza que deseja excluir a disciplina?');
            if(confirmation){
                window.location.href = 'excluir-disciplina.php?id={$id}';
            } else {
                window.location.href = 'listadisciplina.php';
            }
          </script>";
}

        
?>