<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

include __DIR__ .'/../views/Home.php';

class HomeController
{
    /**
     * Metodo per l'accesso alla home page
     * @method GET
     */
    function home(Request $request, Response $response, $args) {
        
       
        //Fetch dei dati dal DB
        $myData = array("planet" => "RD20",
        "author"=>$args["nome"],
        "alunni"=>["Lodde", "DJYANG", "Scarpulla"],
        "script"=>"alert('Hello World')",
        "html"=>'<h3>CIAO</h3>');
        $view = new Home();
        $view->setData($myData);
    
        $response->getBody()->write($view->render());
        return $response;
    }
}