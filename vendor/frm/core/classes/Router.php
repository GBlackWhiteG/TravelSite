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

                if ($route['middleware']) {
                    $middleware = MIDDLEWARE[$route['middleware']] ?? false;
                    if (!$middleware) {
                        throw new \Exception("Incorrect middleware {$route['middleware']}");
                    }

                    (new $middleware)->handle();
                }

                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }

    public function only(string $middleware): Router
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
        return $this;
    }

    public function add($uri, $controller, $method): Router
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null,
        ];

        return $this;
    }

    public function get($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function patch($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'PATCH');
    }

    public function delete($uri, $controller): Router
    {
        return $this->add($uri, $controller, 'DELETE');
    }
}