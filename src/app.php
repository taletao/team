<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/cloud.php';

/*
 * A simple Slim based sample application
 *
 * See Slim documentation:
 * http://www.slimframework.com/docs/
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \LeanCloud\LeanClient;
use \LeanCloud\Storage\CookieStorage;
use \LeanCloud\Engine\SlimEngine;

$app = new \Slim\App();
// 禁用 Slim 默认的 handler，使得错误栈被日志捕捉
unset($app->getContainer()['errorHandler']);

LeanClient::initialize(
    getenv("LC_APP_ID"),
    getenv("LC_APP_KEY"),
    getenv("LC_APP_MASTER_KEY")
);
// 将 sessionToken 持久化到 cookie 中，以支持多实例共享会话
LeanClient::setStorage(new CookieStorage());

SlimEngine::enableHttpsRedirect();
$app->add(new SlimEngine());

$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});

// compute a random integer between min and max
$app->post('/randomInt', function (Request $request, Response $response) {
    // parse min and max from request body
    $body = $request->getBody();
    $json = json_decode($body, true);

    // or simply
    // $json = $request->getParsedBody();

    $val    = rand($json["min"], $json["max"]);
    $result = array(
        "value"       => $val,
        "currentTime" => date(DATE_ATOM),
    );
    
    // PSR-7 response is immutable
    $newResponse = $response->withHeader("Content-Type", "application/json");
    $newResponse->getBody()->write(json_encode($result));
    return $newResponse;
});

$app->run();

