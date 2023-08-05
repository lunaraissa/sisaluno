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
  
<body>
    <div class="container">

    <div class="colunaesquerda">
    <div class="tituloheaderesquerda">Sistema escolar</div>
    <p class="adm">Adiministrador</p>
        <nav>
        <a class="link-voltar" href="index.php">Voltar</a>
        </nav>

    </div>
    </div>

    <div class="colunadireita">
    <form method="GET" action="crudaluno.php">
    <h1>Cadastro de alunos</h1>

    <p for=>Nome completo</p>
    <div class="dados">
        <input type="text"  placeholder="Informe seu nome completo" name="nome" class="confignome">

     <p for=>Digite sua idade</p>
     <input type="number" placeholder="Informe sua idade" name="idade" class="configidade">

     <p for=>Digite seu endereço</p>
     <input type="text" placeholder="Informe seu endereco" name="endereco" class="enderecoenascimento">

     <p for=>Informe sua data de nascimento</p>
     <input type="date" placeholder="Informe sua data de nascimento" name="datanascimento" class="enderecoenascimento">

     <p for=>Informe seu status</p>
     <select type="text" placeholder="Informe seu status (AP ou RP)" name="estatus" class="enderecoenascimento">
     <option value="">Selecione</option>
        <option value="AP">AP</option>
        <option value="RP">RP</option>
     </select>
</div>
     
     <div class="botaolayout">

     <input type="submit" name="cadastrar" value="Cadastrar" class="botao">

    <a class="botao2" href="listaalunos.php">Verificar alunos cadastrados</a>
    

     </div>


     </form>
</div>

</body>
</html>