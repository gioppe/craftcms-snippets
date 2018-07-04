<?php

// check if current logged user is Admin
Craft::$app->user->getIsAdmin()

// Refer: https://docs.craftcms.com/api/v3/craft-services-users.html  
  
// get a user
Craft::$app->users->getUserByUsernameOrEmail( $usernameOrEmail );
