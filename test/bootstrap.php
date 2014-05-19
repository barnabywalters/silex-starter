<?php

namespace YOUR_NAMESPACE_HERE;

use Symfony\Component\HttpFoundation as Http;

ob_start();
require __DIR__ . '/../vendor/autoload.php';
ob_end_clean();

function createTestApplication() {
	$app = require __DIR__.'/../src/app.php';
	require __DIR__.'/../config/dev.php';
	
	// Test-specific config.
	$app['test'] = true;
	$app['exception_handler']->disable();
	require __DIR__ . '/user-config.php';
	
	require __DIR__.'/../src/controllers.php';
	return $app;
}
