<?php
/**
 * Controller genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Base\FrontendController;
use App\Models\Post;

class PostsController extends FrontendController
{
	/**
	 * Display a listing of the Posts.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
        $posts = Post::all();

        return View('posts', [
            'posts' => $posts,
        ]);
	}
}
