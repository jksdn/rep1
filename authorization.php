<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{
	/**
	 * Determine if the given post can be updated by the user.
	 * 
	 * @param	\App\User	$user
	 * @param	\App\Post	$post
	 * @return	\Illuminate\Auth\Access\Response
	 */
	public function update(User $user, Post $post)
	{
		return $user->id === $post->post_id
			? Response::allow()
			: Response::deny("You do not own this post");
	}
}
