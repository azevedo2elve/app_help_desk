<?php

    session_start();

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    // remover índices do array de sessão
    // unset() - remove indices - tem inteligência para remover o indice se ele existir


    // destruir a variável de sessão
    // session_destroy() - remove todos os indices contidos dentro da global session 

    // destroi todas variáveis da sessão e manda novamente para o index.php
    session_destroy();
    header("Location: index.php");
?>