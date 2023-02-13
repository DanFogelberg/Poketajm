<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\Http\Request;


class RequestTest extends TestCase{

    function test_uri()
    {
        $_SERVER["REQUEST_URI"] = "/tjenaTest";
        $this->assertSame("/tjenaTest", Request::uri());
    }



}