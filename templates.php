<?php

// render template into a variable

$template = 'folder/filename';
$html = Craft::$app->view->renderTemplate($template, ['myVar' => $myVar] );
