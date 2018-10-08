<?php

// boilerplate...
namespace modules\mymodule\controllers;

use modules\mymodule\MyModule;

use Craft;
use craft\web\Controller;

class FooController extends Controller
{
  //  CamelCase translates to snake-case
  protected $allowAnonymous = ['bar', 'baz-quez'];
  
  public function actionBar() {
    // responds to: actions/my-module/foo/bar      
  }
  
  public function actionBazQuez() {
    // responds to: actions/my-module/foo/bar-quez
  }
  

}
