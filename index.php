<?php
  $xmlContent = $argv[1];     // Arquivo xml em string
  
  $xmlObject = simplexml_load_string($xmlContent);
  $jsonString = json_encode($xmlObject, JSON_PRETTY_PRINT);
  echo $jsonString;
?>
