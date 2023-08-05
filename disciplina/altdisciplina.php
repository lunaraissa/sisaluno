<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro escolar</title>
</head>
<style>

body{
    display: flex;
    background-color: #CCD1DF;
}

.tituloheaderesquerda{
    font-size: 30px;
    text-align: center;
    border-bottom: 1px white solid;
    color: white;
    padding: 20px;
}

.colunaesquerda{
    display: flex;
    width: 200px;
    height: 600px;
    align-items: left;
    flex-direction: column;
    text-align: center;
    background-color: #203757;
    color: white;
}

.colunadireita{
    display: flex;
    width: 700px;
    height: 400px;
    align-items: center;
    justify-content: space-around;
    margin: 90px;
}

input{
    border: 1px solid #203757;
    border-radius: 10px;
    background-color:#c2c9cf;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: 10px;
}

h1{
    font-size: 40px;
    text-align: left;
}

.turma{
    width: 450px;
    gap: 0px 465px;
}

.enderecoenascimento{
    width: 450px;
    gap: 0px 340px;
}

.confignome{
    width: 450px;
}

.configidade{
    width: 450px;
}

.configcaixastexto{
    width: 450px;
}

.link-voltar{
    display: flex;
    align-items: left;
    text-decoration: none;
    color: rgb(255, 255, 255);
    padding: 15px;
    font-size: 20px;
}

form{
    color: #203757;
    padding: 30px;
    margin: 30px;
}

.botao{
    background-color: #203757;
    color: white;
    padding: 10px;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 200px;
    height: 50px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
} 

.botao:hover{
color: black;
background-color:#7d8da3;
font-weight: bold;
}

.botao2{
    margin-top: 9px;
    background-color: #203757;
    color: white;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 200px;
    height: 50px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
} 

.botao2:hover{
color: black;
background-color:#7d8da3;
font-weight: bold;
}

.botaolayout{
    padding: 30px;
    width: 400px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}


select{
    border: 1px solid #203757;
    border-radius: 10px;
    background-color:#c2c9cf;
    height: 25px;
}

select{
    border: 1px solid #203757;
    border-radius: 10px;
    background-color:#c2c9cf;
}

</style>

<body>

<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];

?>
  
    <div class="container">

    <div class="colunaesquerda">
    <div class="tituloheaderesquerda">Sistema escolar</div>
    <p class="adm">Adiministrador</p>
        <nav>
        <a class="link-voltar" href="../aluno/index.php">Voltar</a>
        </nav>

    </div>
    </div>


    <div class="colunadireita">
    <form method="POST" action="cruddisciplina.php">
    <h1>Alterar dados</h1>

    <p for=>Nome da disciplina</p>
    <div class="dados">
    <input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> class="confignome">

    
    <input type="hidden" name="id" id="" value=<?php echo $id?>>

    <p for=>Carga horária</p>
    <div class="dados">
    <input type="text" name="ch" id="" value=<?php echo $ch?> class="confignome" >


     <p for=>Semestre</p>
     <input type="text" name="semestre" id="" value=<?php echo $semestre?> class="configidade" >

     <p for=>ID professor</p>
     <input type="number" name="idprofessor" id="" value=<?php echo $idprofessor?> class="enderecoenascimento" >
     
     <div class="botaolayout">
     <input type="submit" name="update" value="Alterar" class="botao">

    <a class="botao2" href="listadisciplina.php">Verificar disciplina cadastradas</a>
    
     </div>
</div>

     </form>
</div>

</body>
</html>