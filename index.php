<?php
  date_default_timezone_set('America/Cuiaba');
  require 'vendor/autoload.php';
  use Slim\Http\Request;
  use Slim\Http\Response;
  $app = new Slim\App();
  $app->config('debug', true);

  $app->get('/', function (Request $request, Response $response) {
      return $response->withRedirect("/home");
  });

  $app->get('/home', function($request, $response, $args){
    $res = new APP\controller\Pagina(["title"=>"Home"]);
    return $response->getBody()->write("");
  });

  $app->run();

?>
