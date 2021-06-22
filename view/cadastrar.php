<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Adicionar</title>
        <link rel="stylesheet" type="text/css" href="../model/style.css">
    </head>

        <nav id="menu" align="center">
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="contatos.php">Contatos</a></li>
                <li><a href="cadastrar.php">Adicionar</a></li>
            </ul>
        </nav><br><br><br><br>

    <body>
        <div id="formC" align="center">
            <form action="../control/gravarDados.php" method="POST" align="center">
                Nome: <input type="text" name="cxnome"><br><br>
                Número: <input type="text" name="cxnum"><br><br>
                E-mail: <input type="text" name="cxemail"><br><br>
                <input type="submit" value="Salvar">
            </form>
        </div>
    </body>
</html>