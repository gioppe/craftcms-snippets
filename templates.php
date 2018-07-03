<?php

// render template into a variable

$template = 'folder/filename';
$html = Craft::$app->view->renderTemplate($template, ['myVar' => $myVar] );


// get translated string

$translated = Craft::t('site', 'string-key');
