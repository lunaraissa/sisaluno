<style>

body{
    background-color: #CCD1DF ;
    }

table{
    border: solid 1px;
    background-color: white;
    width: 100%;
}
th{
    border-bottom: solid 1px;
    border-right: solid 1px;
    font-size: 18px;
    height: 50px;
    background-color: #203757;
    color: white;
}

td{
    border-right: 1px solid;
    text-align: center;
}
.container{
    margin: auto;
    margin-top: 20px;
    height: 100%;
    width: 1300px;
}

.botao{
    border: 0px;
}

a{
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.voltar{
    margin-bottom: 15px;
    background-color: #203757;
    color: white;
    text-decoration: none;
    border: 3px rgb(0, 0, 0);
    border-radius: 10px;
    width: 170px;
    height: 40px;
    font-size: 15px;
    transition: 0.5s;
    font-weight: bold;
}

.header{
    display: flex;
    align-items: center;
    justify-content: center;
    border-bottom: 1px solid ;
}


</style>


<?php 
/*
 * Melhor prática usando Prepared Statements
 * 
 */
require_once('../conexao.php');
   
  $retorno = $conexao->prepare('SELECT * FROM aluno');
  $retorno->execute();

?>      
<div class="container">

<div class="header">
 <button class='voltar'><a href='../index.php'>Página inicial</a></button>;
</div>

        <table> 
            <thead>
            
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Data de nascimento</th>
                    <th>Status</th>
                </tr>
            
            </thead>

            <tbody>
                <tr>
                    <?php foreach($retorno->fetchall() as $value) { ?>
                        <tr>
                            <td> <?php echo $value['nome'] ?>   </td> 
                            <td> <?php echo $value['idade']?>  </td> 
                            <td> <?php echo $value['endereco']?> </td>
                            <td> <?php echo $value['datanascimento']?> </td> 
                            <td> <?php echo $value['estatus']?> </td> 


                            <td class="botao">

                               <form method="POST" action="altaluno.php">
                               <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="alterar"  type="submit">Alterar</button>

                                </form>

                             </td> 

                             <td class="botao">

                             <form method="GET" action="crudaluno.php">
                                        <input name="id" type="hidden" value="<?php echo $value['id'];?>"/>
                                        <button name="excluir"  type="submit">Excluir</button>
                                </form>
                             </td>           
                      </tr>
                    <?php  }  ?> 
                 </tr>
            </tbody>
        </table>
</div>
    </div>