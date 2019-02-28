<?php
namespace App\HttpController\Api;


use EasySwoole\Core\Http\AbstractInterface\Controller;

class Index extends Controller
{
    function index()
    {
        // TODO: Implement index() method.
        $this->response()->write('hello api');
    }
}
