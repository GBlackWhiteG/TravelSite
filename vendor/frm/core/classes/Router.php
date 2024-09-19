<?php

namespace frm;

class Router
{

    protected array $routes = [];
    protected string $uri;
    protected string $method;

    public function __construct()
    {
        $this->uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
        $this->method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
    }

    public function match(): void
    {
        $matches = false;

        foreach ($this->routes as $route) {
            if (($route['uri'] === $this->uri) && ($route['method'] === strtoupper($this->method))) {
                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }

    public function add($uri, $controller, $method): void
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    public function get($uri, $controller): void
    {
        $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller): void
    {
        $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller): void
    {
        $this->add($uri, $controller, 'PATCH');
    }


    public function delete($uri, $controller): void
    {
        $this->add($uri, $controller, 'DELETE');
    }

}