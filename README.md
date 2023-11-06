# access-node
Acesso a um nó específico do xml e retorno em json. Útil para retirar as tags de um envelopamento e facilitar o tratamento do retorno ao transformar em json.

<hr>

## Exemplo de utilização/execução em linha
```
php access-node/index.php '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ped="http://pedidocotacao.mv.client.webService.apoio.com.br/"><soapenv:Header/><soapenv:Body><ped:enviarPedidoCotacao><arg0><cabecalho><login>ws.avare</login><senha>ws.avare</senha></cabecalho><solicitacaoCompra><dataHoraValidade>01/01/2024 11:01</dataHoraValidade><listaProduto><produto><codigoProduto>0000037788</codigoProduto><quantidade>5.000000</quantidade></produto></listaProduto><operacao>I</operacao><titulo>TESTE</titulo></solicitacaoCompra></arg0></ped:enviarPedidoCotacao></soapenv:Body></soapenv:Envelope>' 'enviarPedidoCotacao'
```

<hr>

## Parâmetros
<ul>
  <li>conteúdo xml (string)</li>
  <li>identificação da tag raiz/principal</li>
</ul>
