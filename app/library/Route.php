<?php

namespace app\library;

class Route
{
  // Construtor da classe Route
  public function __construct(public string $uri, public string $request, public string $controller)
  {
  }

  // Retorna a URI atual
  public function currentUri()
  {
    // Utiliza a função parse_url para obter a URI atual
    // A função rtrim remove a barra final da URL (caso exista)
    return $_SERVER['REQUEST_URI'] !== '/' ? rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '/';
  }

  // Retorna o método da requisição atual
  private function currentRequest()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }

  // Verifica se a rota atual corresponde à rota definida
  public function match()
  {
    if (
      $this->uri === $this->currentUri() &&
      strtolower($this->request) === $this->currentRequest()
    ) {
      return $this;
    }
  }
}
