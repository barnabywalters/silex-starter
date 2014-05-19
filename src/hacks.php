<?php

namespace YOUR_NAMESPACE_HERE;

// This is a staging ground for quick, unpleasant hacks.
// Anything in here is considered fair game for refactoring/rearchitecting.

// You can either keep this really basic template rendering function or substitute another.
function renderTemplate($__basedir, $template, array $__templateData = array()) {
	$render = function ($__path, array $__templateData=array()) use ($__basedir) {
		$render = function ($template, array $data=array()) use ($__basedir) {
			return renderTemplate($__basedir, $template, $data);
		};
		ob_start();
		extract($__templateData);
		unset($__templateData);
		include $__basedir . '/../templates/' . $__path . '.php';
		return ob_get_clean();
	};
	return $render($template, $__templateData);
}
