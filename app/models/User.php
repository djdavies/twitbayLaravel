<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}

/*

TODO: Make login business logic into a method,
live within model or in controller

<?php

	$loggedIn = isset($_SESSION['user']);
	if ($loggedIn) {
		// method 1
		echo $_SESSION['user']['name'];

		// method 2
		$user = $_SESSION['user'];
		echo $user['name'];
	}
	else {
		if (isset($_SESSION['error']))
			echo $_SESSION['error'];
?>

*/
