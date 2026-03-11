<html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almafisio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imagens/logo.png">
</head>

<body>
    <div class="menu-topo">
        <img src="imagens/logo.png" alt="Logo do sistema" class="logo">
         <a href="https://www.google.com/" class="link-sair">
            <img src="imagens/sair.png" alt="Sair do sistema" class="sair">
        </a>
    </div>
    <h1 class="log">Criação de Conta</h1>
    <div class="sla">
        <div>
            <label for="email" class="campo">Insira seu E-mail</label>
            <input type="email" name="email" class="email" required>
        </div>
        <br>
        <div>
            <label for="senha" class="campo">Coloque sua Senha:</label>
            <input type="password" name="senha" class="senha" required>
        </div>
        <br>
        <div>
            <p>Selecione seu cargo:</p>
            <label for="radio" class="campo">CLIENTE</label>
            <input type="radio" name="radio" class="radio" required>
            <label for="radio" class="campo">ADM</label>
            <input type="radio" name="radio" class="radio" required>
        </div>
        <br>
        <div>
            <button type="submit" id="bt">Criar Conta</button>
        </div>
    </div>
</body>

</html>

</html>