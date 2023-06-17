<?php

use app\library\Router;

// Carrega as dependências
require '../vendor/autoload.php';

// Inicia a sessão
session_start();

// Carrega as variáveis de ambiente (usando o pacote Dotenv)
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

// Cria uma instância do Router (roteador)
$route = new Router;
