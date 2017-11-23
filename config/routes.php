<?php
return array
(
	'item/([0-9]+)' => 'site/item/$1', // SiteController->actionItem(parameters)
	'item' => 'site/index', // SiteController->actionIndex
	'contacts' => 'site/contacts', // SiteController->actionContacts
	
	'admin/red/([0-9]+)' => 'admin/red/$1', // AdminController->actionRed(parameters)
	'admin' => 'admin/index', // AdminController->actionIndex
	'login' => 'user/login', // UserController->actionLogin
	'logout' => 'user/logout', // UserController->actionLogout
	'' => 'site/index', // SiteController->actionIndex
);
