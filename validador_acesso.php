<?php
  session_start();

  // ao tentar abrir a página se não tiver a sessão autenticada como 'SIM' ira redirecionar para index.php com o parâmetro erro2
  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
?>