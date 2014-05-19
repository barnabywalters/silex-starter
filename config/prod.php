<?php

use Silex\Provider\MonologServiceProvider;

// Production config goes here.
// $app['blahblahblah'] = 'blah';

$app->register(new MonologServiceProvider(), array(
	'monolog.logfile' => __DIR__.'/../logs/silex.log',
));
