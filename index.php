<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador PDF</title>
</head>
<body>
    <h2>Gerador de PDF</h2>
    <form method="POST" action="gerar_pdf.php">
        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Nome Completo"><br><br>

        <label for="">E-mail:</label>
        <input type="text" name="email" placeholder="E-mail"><br><br>

        <label for="">Descrição</label>
        <textarea name="descricao" id="" cols="30" rows="5" placeholder="Descrição Completa">
        </textarea><br><br>

       <input type="submit" name="btn-gerar" value="Gerar PDF"><br><br>

    </form>
</body>
</html>