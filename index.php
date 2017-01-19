<?php
  require_once("getquote.php"); // Chama o arquivo das citações
  $quote = getQuote(); // cria uma variavel para o array retornado pela função
  echo $quote['id']; // Printa o ID da citação
  echo "<br>";
  echo $quote['author']; // Printa o autor da citação
  echo "<br>";
  echo $quote['tema']; // Printa o tema da citação
  echo "<br>";
  echo $quote['quote']; // Printa a citação

?>
