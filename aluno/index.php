<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de cadastro escolar</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #CCD1DF;
            margin: 0;
            padding: 0;
        }

        .header {
            padding: 20px;
            text-align: center;
            font-size: 32px;
            background-color: #203757;
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(80vh - 110px);
        }

        .colunaesquerda,
        .colunadireita {
            flex: 1;
            height: 100%;
        }

        .colunameio {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .botao {
            background-color: #203757; /* Removed the extra 0 in the color code */
            padding: 12px 32px;
            border: none;
            border-radius: 5px;
            width: 200px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
            font-weight: bold;
            color: white;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        .botao:hover {
            background-color: #44505e;
        }

        .botao a {
            color: white;
            text-decoration: none;
        }

        .footer {
            text-align: center;
            background-color: #203757;
            color: white;
            padding: 10px 0;
            font-size: 14px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Sistema de Cadastro Escolar</h2>
    </div>

    <div class="container">
        <div class="colunaesquerda"></div>
        <div class="colunameio">
            <a href="cadaluno.php" class="botao">Cadastrar Aluno</a>
            <a href="../professor/cadprofessor.php" class="botao">Cadastrar Professor</a>
            <a href="../disciplina/caddisciplina.php" class="botao">Cadastrar Disciplina</a>
        </div>
        <div class="colunadireita"></div>
    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Sistema de Cadastro Escolar | Todos os direitos reservados
    </div>
</body>
</html>