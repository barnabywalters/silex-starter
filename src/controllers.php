<?php

namespace YOUR_NAMESPACE_HERE;

use Silex\Application;
use Symfony\Component\HttpFoundation as Http;
use Symfony\Component\HttpKernel;

/** @var $app \Silex\Application */

$app->get('/', function (Http\Request $request, Application $app) {
	return $app['render']('index.html', []);
});
