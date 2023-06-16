<?php

namespace app\library;

class Route
{
  public function __construct(
    public string $uri,
    public string $request,
    public string $controller,
  ) {
  }

  public function currentUri()
  { //rtrim para tirar a ultima barra e o php url path tira a query string
    return $_SERVER['REQUEST_URI'] !== '/' ? rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/') : '/';
  }

  private function currentRequest()
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }

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