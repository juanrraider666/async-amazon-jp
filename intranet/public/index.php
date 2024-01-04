<?php

namespace AsyncAmazonJp\public;


use AsyncAmazonJp\intranet\AsyncAmazonJpKernel;
use Symfony\Component\HttpFoundation\Request;

umask(0000);

require_once dirname(__DIR__).'../../vendor/autoload_runtime.php';

$kernel = new AsyncAmazonJpKernel('dev', true);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

