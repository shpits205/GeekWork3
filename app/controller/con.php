<?php

//namespace app\controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require 'app/model/models.php';
use app\model;

#  public $request;
#  public $response;
#  public $result;

$correct_uri = false;
$request = Request::createFromGlobals();
$animal_kind = ltrim($request->getPathInfo(), "/");

switch ($animal_kind)
{
    case "Birds":
        $result = app\model\newBirds();
        break;
    case "Mammals":
        $result = app\model\newMammals();
        break;
    case "Artiodactyls":
        $result = app\model\newArtiodactyls();
        break;
    case "":
        break;
    default:
        $response = new Response();
        $response->setStatusCode(404);
        $response->setContent("404 error");
        $response->headers->set('Content-Type', 'text/html');
        $response->send();
}

if (!strlen($animal_kind)==0)
{
    #$result = model\invokeModel($animal_kind);
    include "app/view/".$animal_kind.".php";
}
else
{
    include ('app/view/default.php');
}