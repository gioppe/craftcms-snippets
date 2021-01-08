<?php 

use craft\mail\Message;

$msg = new Message();
$msg->setTo('recipient@email.com');
$msg->setSubject("New email subject");
$template = Craft::$app->getView()->renderTemplate('path/to/template', ['data' => 'someData']);
$msg->setHtmlBody($template);
$msg->send();
