<?php
// Front controller (controlador frontal)
require './bootstrap.php';

try {
  // Define as rotas da aplicação

  // Rota raiz da aplicação
  $route->add('/', 'GET', 'HomeController:index');

  // Rota para exibir o carrinho
  $route->add('/cart', 'GET', 'CartController:index');

  // Rota para adicionar itens ao carrinho
  $route->add('/cart/add', 'GET', 'CartController:add');

  // Rota para remover itens do carrinho
  $route->add('/cart/remove', 'GET', 'CartController:destroy');

  // Rota para atualizar o carrinho (via requisição POST)
  $route->add('/cart/update', 'POST', 'CartController:update');

  // Rota para exibir a página de login
  $route->add('/login', 'GET', 'LoginController:index');

  // Rota para processar o formulário de login (via requisição POST)
  $route->add('/login', 'POST', 'LoginController:store');

  // Rota para fazer logout
  $route->add('/logout', 'GET', 'LoginController:destroy');

  // Rota para exibir a página de checkout
  $route->add('/checkout', 'GET', 'CheckoutController:checkout');

  // Rota para exibir a página de sucesso após o checkout
  $route->add('/success', 'GET', 'StatusCheckoutController:success');

  // Rota para exibir a página de cancelamento após o checkout
  $route->add('/cancel', 'GET', 'StatusCheckoutController:cancel');

  // Rota para processar o webhook de pagamento
  $route->add('/webhook', 'GET', 'WebhookController:payment');

  // Inicializa as rotas
  $route->init();
} catch (Exception $e) {
  // Em caso de exceção, imprime uma mensagem de erro
  var_dump($e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine());
}
