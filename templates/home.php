<?php

namespace tw2113\Whichsky;
use \Slim\Slim as Slim;

$app = Slim::getInstance();

$app->get('header.php');

printf( '<h1>%s</h1>',
	'Welcome to Whicksky! Your own personal Whisky tasting and wishlist application.'
);

$app->get('footer.php');
