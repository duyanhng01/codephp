<?php
class User extends AppModel
{
    var $name = 'User';
  /* The $useTable keyword is reserved in cakePHP
	This is used to define the custom new table name */
	var $useTable = 'google_users';
}
?>