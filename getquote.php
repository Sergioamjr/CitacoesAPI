<?php
  $json = file_get_contents("citacoes.json"); // Pega as citações do arquivo
  $decode = json_decode($json,TRUE); // decoda o arquivo em json retornando um array
  $randId = rand(1,1035); // Gera um id aleatório para selecionar uma citação, sendo 1035 a quantidade de citações no arquivo citacoes.json
  if (isset($_GET['type'])) {
    if ($_GET['type'] == "json") { // verifica se o parametro definido é igual a json
      header('Content-Type: application/json; charset=utf-8'); // Define o Content-Type para JSON
      echo json_encode($decode['citacao'][$randId]); // Printa a citação em formato JSON
    }
    elseif ($_GET['type'] == "xml") { // verifica se o paramentro definido é igual a xml
      header('Content-type: text/xml; charset=utf-8'); // Define o Content-type para XML
      echo '<?xml version="1.0" encoding="UTF-8"?>';
      $xml = $decode['citacao'][$randId]; // Reduz a string para facilitar o ECHO
      echo "<citacao><id>{$xml['id']}</id><tema>{$xml['tema']}</tema><author>{$xml['author']}</author><quote>{$xml['quote']}</quote></citacao>"; // Printa a citação em formato XML
    }
    else {
      echo "Parametro não válido"; // Caso o parametro no url for invalido, printa o erro
    }
  }
  else { // Else para criar a function e retornar a citação
    function getQuote() {
      global $decode; // Chama a variável global
      global $randId; // Chama a variável global
      return $decode['citacao'][$randId]; // Retorna a citação em array. ['id'], ['author'], ['tema'] e ['citacao']
    }
  }
?>
