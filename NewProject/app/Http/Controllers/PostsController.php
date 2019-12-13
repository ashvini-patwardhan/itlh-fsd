<?php 

namespace App\Http\Controllers;
use DB;
use App\Post;
class PostsController extends Controller
{
	public function show($slug)
	{		
			
			//$post = DB::table('posts')->where('slug', $slug)->first();
			//$post = Post::where('slug', $slug)->firstOrFail();			

			// if(! $post){
			// 	abort(404, 'Sorry, page was not found.');
			// }

			return view('post', [				
				'post'=>Post::where('slug', $slug)->firstOrFail()
			]);

	}

}
