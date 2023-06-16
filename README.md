# App-Loja-Stripe-Checkout

Este é um aplicativo de loja virtual desenvolvido utilizando a arquitetura MVC, com o template engine Plates, autenticação, Bootstrap, exibição do carrinho de compras e checkout com Stripe.

## Funcionalidades

- Exibir produtos da loja.
- Adicionar produtos ao carrinho de compras.
- Atualizar a quantidade de produtos no carrinho.
- Remover produtos do carrinho.
- Realizar o checkout utilizando o Stripe como método de pagamento.

## Configuração

Antes de executar o aplicativo, é necessário configurar algumas informações. Siga as etapas abaixo:

1. Crie um arquivo chamado `.env` na raiz do projeto.
2. Abra o arquivo `.env` e adicione as seguintes linhas:

```dotenv

STRIPE_PUBLIC_KEY=sua_chave_publica_do_stripe
STRIPE_SECRET_KEY=sua_chave_secreta_do_stripe
STRIPE_KEY=
DATABASE_NAME=
DATABASE_HOST=
DATABASE_USER=
DATABASE_PASSWORD=
BASE_URL=

```

Certifique-se de substituir `sua_chave_publica_do_stripe` e `sua_chave_secreta_do_stripe` pelas suas chaves de API do Stripe.

## Executando o Aplicativo

Para executar o aplicativo, siga as etapas abaixo:

1. Certifique-se de ter um servidor web local configurado (como Laragon, XAMPP, WAMP, etc.).
2. Copie todos os arquivos do projeto para o diretório do servidor web.
3. Abra o navegador web de sua preferência.
4. Acesse o aplicativo digitando o endereço local correspondente (ex: `http://localhost/loja-stripe-checkout`).

## Estrutura do Projeto

O projeto possui a seguinte estrutura de diretórios:

- `app`: Contém os arquivos relacionados ao aplicativo, como controladores, modelos, visualizações e configurações.
- `public`: Contém os arquivos públicos acessíveis pelo navegador, como CSS, JavaScript, imagens e o arquivo `index.php`.
- `template`: Contém os arquivos de template bootstrap.
- `.env`: Contém variáveis de ambiente que podem ser configuradas para ajustar o comportamento do aplicativo.

## Requisitos

Para executar o aplicativo, você precisará dos seguintes requisitos:

- Servidor web local (como Laragon, XAMPP, WAMP, etc.).
- Navegador web (Chrome, Firefox, etc.).
- Conta no Stripe para obter as chaves de API.

## Capturas de Tela

Aqui estão algumas capturas de tela do aplicativo em execução:

![Página inicial da loja](https://github.com/tarcisiodev1/app-loja-stripe-checkout/assets/111070575/1155f958-d474-4570-bd15-c785e6be263c)

![Carrinho de compras](https://github.com/tarcisiodev1/app-loja-stripe-checkout/assets/111070575/c4d7294b-cf22-4038-b3b8-6f97907ff4e5)

![Responsividade](https://github.com/tarcisiodev1/app-loja-stripe-checkout/assets/111070575/f7e0372b-435a-4635-bcdd-e571151a9f03)

![Responsividade2](https://github.com/tarcisiodev1/app-loja-stripe-checkout/assets/111070575/15618490-42a7-4a3c-8373-687be6e09737)

## Considerações Finais

Este é um projeto de loja virtual, utiliza o Plates como template engine, e o Stripe como método de pagamento. Ele possui funcionalidades básicas para exibir produtos, adicionar ao carrinho de compras e realizar o checkout.

Sinta-se à vontade para personalizar e expandir este projeto de acordo com suas necessidades e requisitos da loja virtual.

Obrigado por conferir este projeto!
