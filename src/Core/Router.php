<?php

namespace App\Core;

class Router
{

    public function dispatcher()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $new = new self();
        $response = $new->resolve($uri);
        $new->execute($response);
        }
    public function resolve($uri)
    {
        $position = strpos($uri, '?');
        if ($position == true){
        $controller = str_split($uri, $position);
        $uriArray = explode("/", $controller[0]);
        }else{
        $uriArray = explode("/", $uri);
        }
        $controller = $uriArray[1];
        $method = $uriArray[2];

        $controller = ucfirst($controller) . 'Controller';
        return [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function execute($response){
        $controller = "\App\Controller\\" . $response['controller'];
        $instance = new $controller();
        $instance->{$response['method']}();        
}
}

