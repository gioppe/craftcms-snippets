<?php

// Refer to:
// https://docs.craftcms.com/api/v3/craft-web-request.html

// get query parameters

$get = Craft::$app->request->getQueryParams();

// get all POST fields
$post = Craft::$app->request->post();
// only one 
$field = Craft::$app->request->post('myField');

// will accept a JSON response?

$ifAcceptsJson = Craft::$app->getRequest()->getAcceptsJson()

// do it!
  
return $this->asJson( $response );

// no wait, send a redirect instead

$this->redirect( $newRoute );

// Guzzle
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

$endpoint = 'http://your-endpoint.com';
$params['foo'] = 'bar';

$client = new Client([
  'json' => $params,
  'headers' => [  
  'Content-Type' => 'application/json',
  'Accept' => 'application/json'
  ]
]);

try {
  $res = $client->post($endpoint); 
} catch (RequestException $e) {
  return false;
}

// set CORS-friendly headers
use craft\web\Response;
Craft::$app->response->getHeaders()->set('Access-Control-Allow-Origin', '*');
