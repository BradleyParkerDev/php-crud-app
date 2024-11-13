<?php 
namespace Bparker\PhpCrudApp;

use Bparker\PhpCrudApp\Lib\Middleware;
use Bparker\PhpCrudApp\Routes\Router;


class App {

    
    public Middleware $middleware;
    public Router $router;

    public function __construct() {
        $this->middleware = new Middleware(); // Corrected property assignment
        $this->router = new Router();
    }

}

?>
