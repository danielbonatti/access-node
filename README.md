# xml-to-json
Converte xml em json. Facilita o tratamento do retorno ao transformar em json.

<hr>

## Exemplo de utilização/execução em linha
```
php xml-to-json/index.php '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ped="http://pedidocotacao.mv.client.webService.apoio.com.br/"><soapenv:Header/><soapenv:Body><ped:enviarPedidoCotacao><arg0><cabecalho><login>ws.avare</login><senha>ws.avare</senha></cabecalho><solicitacaoCompra><dataHoraValidade>01/01/2024 11:01</dataHoraValidade><listaProduto><produto><codigoProduto>0000037788</codigoProduto><quantidade>5.000000</quantidade></produto></listaProduto><operacao>I</operacao><titulo>TESTE</titulo></solicitacaoCompra></arg0></ped:enviarPedidoCotacao></soapenv:Body></soapenv:Envelope>'
```

<hr>

## Parâmetro(s)
<ol>
  <li>conteúdo xml (string)</li>
</ol>
