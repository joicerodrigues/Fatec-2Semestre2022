
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastrar</h2>
        <p>Favor inserir os dados.</p>
        <form action="bd.php" method="POST">
            <div class="form-group">
                <label>Nome</label>
                <input id="nome" type="text" name="nome" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>CPF</label>
                <input id="cpf" type="text" name="cpf" class="form-control" value="" maxlength="11">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Placa</label>
                <input id="placa" type="text" name="plca" class="form-control" value="" maxlength="7">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>    
</body>
</html>