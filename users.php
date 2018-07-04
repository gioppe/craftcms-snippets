<?php

// check if current logged user is Admin
Craft::$app->user->getIsAdmin()

// Refer: https://docs.craftcms.com/api/v3/craft-services-users.html  
  
// get a user
Craft::$app->users->getUserByUsernameOrEmail( $usernameOrEmail );

// create a new user
use craft\elements\User;

$user = new User;
$user->email     = $myEmail;
$user->username  = $myUsernameorEmail;
$user->firstName = $myFirstName;
$user->lastName  = $myLastName;
// $user->pending = true;

$user->setFieldValues([		
  'myField' => 'myValue',
]);

$user->validate();
$success = Craft::$app->getElements()->saveElement($user, false);
