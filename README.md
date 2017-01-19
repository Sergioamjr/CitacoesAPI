# CitacoesAPI

Api api criada para retornar citações famosas. No momento são apenas 140 citações. Mais serão adicionadas

## Implementação
Para implementar o api ao código, basta adicionar as seguintes linhas de código:
```sh
require_once("getquote.php"); // Chama o arquivo das citações
$quote = getQuote(); // cria uma variavel para o array retornado pela função
```
Como a função retorna uma Array, basta usar usar os valores abaixo para retornar os valores:
```sh
echo $quote['id']; // Printa o ID da citação (Apenas para fins de depuração)
echo $quote['author']; // Printa o autor da citação
echo $quote['tema']; // Printa o tema da citação
echo $quote['quote']; // Printa a citação
```
## JSON
Caso preferir, a api também retorna uma citação aleatória em formato json. Basta colocar o parametro "type" com o valor "json".
```sh
getquote.php?type=json
```

## XML
Se preferir retornar a citação em xml, a api também esta preparada pra isso. Ao invés de colocar o valor "json" no parametro "type" basta colocar o valor "xml".
```sh
getquote.php?type=xml
```
