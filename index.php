<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class Profile extends Controller
{
	/**
	 * Show the profile for the given user,
	 *
	 * @param	int	$index
	 * @return	View
	 */
	public function __invoke($index)
	{
		return view('user.profile', ['user' => User::findOrFail($index)]);
	}
}
