<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color: #CCD1DF;
}

.header {
  padding: 15px;
  text-align: center;
  font-size: 25px;
  background-color: #CCD1DF;

}

.container {
  display: flex;
  text-align: center;
  justify-content: space-between;
}

.colunaesquerda {
    height: 300px;
   flex: auto;
}

.colunadireita {
    height: 300px;
    flex:auto;
    height: 1000px;
 }

.colunameio {
    height: 300px;
  flex: auto;
}

.footer {
  text-align: center;
}

.botao{
    background-color: #203757;
    padding: 10px;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 200px;
    height: 50px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
    color: white;
} 

.botao:hover{
color: white;
background-color:#7d8da3;
font-weight: bold;
}

a{
  color: black;
  font-size: 20px;
}

.footer{
    background-color: #CCD1DF;
    height: 75px;
    width: 100%;

}

</style>

<body>
<div class="header">
  <h2>Sistema de cadastro de alunos</h2>
</div>

<div class="container">

  <div class="colunaesquerda"></div>
  

  <div class="colunameio">
  <button class="botao"><a href="cadaluno.php">Cadastrar aluno</a></button>
    <button class="botao"><a href="listaalunos.php">Verificar lista</a></button>
  </div>

  <div class="colunadireita"></div>
</div>

<div class="footer">
    
</div>
</body>
</html>