<?php

namespace app\library;

class Router
{
  // Array para armazenar as rotas definidas
  private array $routes = [];

  // Adiciona uma nova rota ao array de rotas
  public function add(string $uri, string $request, string $controller)
  {
    $this->routes[] = new Route($uri, $request, $controller);
  }

  // Inicializa o roteamento e direciona para o controlador adequado
  public function init()
  {
    foreach ($this->routes as $route) {
      if ($route->match($route)) {
        // Registra o redirecionamento
        Redirect::register($route);
        // Chama o método do controlador correspondente à rota
        return (new Controller)->call($route);
      }
    }

    // Se nenhuma rota for encontrada, chama o controlador NotFoundController
    return (new Controller)->call(new Route('/404', 'GET', 'NotFoundController:index'));
  }
}
