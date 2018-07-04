<?php

// Refer to:
// https://docs.craftcms.com/api/v3/craft-web-request.html

// get query parameters

$get = Craft::$app->request->getQueryParams();

// get POST data

$post = Craft::$app->request->post();    

// will accept a JSON response?

$ifAcceptsJson = Craft::$app->getRequest()->getAcceptsJson()

// do it!
  
return $this->asJson( $response );

// no wait, send a redirect instead

$this->redirect( $newRoute );
