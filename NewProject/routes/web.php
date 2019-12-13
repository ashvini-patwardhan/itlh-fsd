<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/test', function () {
// 	$name = request('name');
//     //return view('test');
//    // return $name;
// 	return view('test', ['name'=>$name]);
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/posts/{post}', function($post){
// 	$posts=[
// 		'my-first-post' => 'this is My first blog', 
// 			'my-second-post' => 'Hi! this is my second blog'
// 		];

// 		if(! array_key_exists($post, $posts)){
// 			abort(404, 'Sorry, page was not found.');
// 		}

// 	return view('post', [
// 		//'post'=> $posts[$post]??'Nothing here yet'
// 		'post'=> $posts[$post]
// 	]);

// });


//Route::get('/posts/{post}', 'PostsController@show');

 Route::get('/', function () {
    return view('welcome');
 });

 Route::get('/about', function () {
 	//$article = App\Article::all();
 	//$article = App\Article::take(2)->get();
 	//$article = App\Article::paginate(2);
 	
 	//return $article;
    return view('about', ['articles'=>App\Article::take(3)->latest()->get()
    ]);
 });

 Route::get('/articles', 'ArticlesController@index');
 Route::get('/articles/{article}', 'ArticlesController@show');



