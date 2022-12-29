<?php
    session_start();
    
    // trabalhando na montagem do texto, vai fazer com que quando tiver um texto com #, seja retirado o # para usar na montagem do arquivo e depois a retirada do mesmo
    $titulo = str_replace('#', '', $_POST['titulo']);
    $categoria = str_replace('#', '', $_POST['categoria']);
    $descricao = str_replace('#', '', $_POST['descricao']);
    
    // implode('#', $_POST); transforma um array() em um string
    // constante PHP_EOL (end of line) quebra linha
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    
    // função nativa (nome_do_arquivo, 'a' -> para escrita)
    // abrindo o arquivo
    $arquivo = fopen('arquivo.hd', 'a');
    // (qual_o_arquivo, o_que_quer_escrever_dentro_do_arquivo)
    // escrevendo o texto
    fwrite($arquivo, $texto);
    // fechar o arquivo aberto depois da escrita
    fclose($arquivo);
    
    header('Location: abrir_chamado.php');
?>