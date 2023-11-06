<?php
  $xmlContent = $argv[1];     // Arquivo xml em string
  $nodoRaiz = $argv[2];       // Nó raiz para acesso aos dados de retorno

  $xmlObject = simplexml_load_string($xmlContent);
  $result = $xmlObject->xpath('//'.$nodoRaiz);
  $jsonString = json_encode($result, JSON_PRETTY_PRINT);
  echo $jsonString;
?>
