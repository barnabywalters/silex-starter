<?php

namespace YOUR_NAMESPACE_HERE;

use Silex\Application;
use Silex\Provider\UrlGeneratorServiceProvider;
use Guzzle;
use Taproot;
use Taproot\Subscriptions;
use PDO;
use Illuminate\Encryption\Encrypter;
use Elasticsearch;

$app = new Application();

$app->register(new UrlGeneratorServiceProvider());

$app['render'] = $app->protect(function ($template, $__templateData = array(), $pad = true) {
	$__basedir = __DIR__;

	$result = renderTemplate($__basedir, $template, $__templateData);

	if ($pad) {
		$out = array(
				renderTemplate($__basedir, 'header.html', $__templateData),
				$result,
				renderTemplate($__basedir, 'footer.html', $__templateData)
		);
		return implode('', $out);
	} else {
		return $result;
	}
});


return $app;
