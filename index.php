<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Livro de Visitas</title>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">       
    <link rel="stylesheet" href="estilo.css">    
    <script src="script.js" defer></script>
</head>
<body>
   <div class="quadro">   
    <div class="centraliza">
    <h1 class="titulo pulse" data-text="📒 Livro de Visitas">📒 Livro de Visitas</h1>
   </div>
    
    <form method="POST" action="">
        <label>Seu nome:</label>
        <input type="text" name="nome" required>

        <label>Sua mensagem:</label>
        <textarea name="mensagem" required></textarea>
        <button type="submit">Enviar</button>
    </form>

    <p> </p>
    <div class="subquadro">
    <h2>Mensagens Anteriores</h2>
    </div>
   
    <div class="mensagens">
        <?php
       
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // --- PHP: salva e exibe mensagens ---
        $arquivo = "mensagens.txt";

        // Verifica se o arquivo existe; se não, cria com permissão segura
        if (!file_exists($arquivo)) {
            // Cria o arquivo vazio
            file_put_contents($arquivo, "");
             // Ajusta permissões para leitura/escrita pelo dono e grupo
            chmod($arquivo, 0664);
        }

        // Salvar mensagem enviada
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
        $nome = htmlspecialchars($_POST["nome"]);
        $mensagem = htmlspecialchars($_POST["mensagem"]);
        $linha = "<p><strong>$nome</strong>: $mensagem</p>\n";
        $mensagens_anteriores = file_get_contents($arquivo);

        if (file_put_contents($arquivo, $linha . $mensagens_anteriores) !== false) {
            header("Location: ".$_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "<p>Erro ao salvar a mensagem.</p>";
        }
        }

        // Mostrar mensagens
        if (file_exists($arquivo)) {
            echo file_get_contents($arquivo);
        } else {
            echo "<p>Seja o primeiro a deixar uma mensagem!</p>";
        }

        ?>
    </div>
  </div>
</body>
</html>