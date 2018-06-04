<?php

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\News;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix'=>'auths'],function(){
	Route::post('login','AuthController@login');
	Route::post('/register','UserAPIController@store');
});

// ADMIN
Route::group(['prefix'=>'admin','middleware'=>'api.auth'],function(){
	// Profile / avatar
	Route::resource('profiles', 'ProfileAPIController');
	Route::post('uploadAvatar/{id}','ProfileAPIController@uploadAvatar');
	//Category
	Route::resource('categories', 'CategoryAPIController');
	Route::get('getAllCategory','CategoryAPIController@getAllCategory');
	Route::get('getAllCategoryTreeView','CategoryAPIController@getAllCategoryTreeView');
	// News
	Route::post('demo', 'NewsAPIController@demo');
	// User
	Route::resource('users', 'UserAPIController');
	//News
	Route::resource('news', 'NewsAPIController');
	Route::get('getAllNews','NewsAPIController@getAllNews');
	Route::post('addNews','NewsAPIController@addNews');
	Route::post('updateNews/{id}','NewsAPIController@update');
	// Image
	Route::post('upLoadFile','ImageController@addImage');
	// Posts
	Route::resource('posts', 'PostAPIController');
	// Musical
	Route::resource('playlists', 'PlaylistAPIController');
	// Notification
	Route::get('getNewNotification','NotificationController@getNewNotification');
	Route::get('getAllNotification','NotificationController@getAllNotification');
	Route::get('checkAll','NotificationController@checkAll');
	Route::get('delete/{id}','NotificationController@delete');
	Route::get('clear','NotificationController@clear');

	// Comments
	Route::get('getComments','CommentAPIController@index');
	Route::put('updateComment/{id}','CommentAPIController@update');
	Route::delete('deleteComment/{id}','CommentAPIController@destroy');
	// Contact
	Route::get('getAllContact','ContactController@getAll');
	Route::delete('deleteContact/{id}','ContactController@deleteContact');

	
});
// PUBLIC
Route::group(['prefix'=>'public'],function(){
	// Musical
	
	/// Posts
	Route::get('getAllPosts','PostAPIController@index');
	Route::get('getPostPublic','PostAPIController@getPostPublic');
	Route::get('getNewsPublic','NewsAPIController@getNewsPublic');
	Route::get('getNewDetail/{id}','NewsAPIController@show');
	Route::get('like/{id}','NewsAPIController@like');
	Route::get('unlike/{id}','NewsAPIController@unLike');
	Route::get('getInstagram','ProfileAPIController@getInstagram');
	Route::get('getCategory','CategoryAPIController@getCategory');
	Route::get('getNewsSite/{id}','NewsAPIController@getNewsSite');
	Route::resource('comments', 'CommentAPIController');
	Route::get('search/{search}','NewsAPIController@search');
	/// Notification
	Route::post('insertNoti','PublicController@notification');
	Route::get('getPlaylists','PlaylistAPIController@index');
	Route::post('createContact','ContactController@create');


});

Route::get('getProfile/{id}','ProfileAPIController@getProfile');
Route::resource('pictures', 'PictureAPIController');
Route::post('uploadImage/{id}','PictureAPIController@uploadImage');
Route::get('getUsers','NewsAPIController@getNews');


Route::post('/update',function(Request $request){
	$inputs = $request->all();
	News::truncate();
	foreach ($inputs as $key => $value) {
		News::create($value);
	}
	$post = News::all();
	return [
                'status' => true,
                'data' => $post,
            ];
	// $news = News::all();
	// foreach ($news as $key => $value) {
	// 	$value->update(['picture'=>url('storage/app/public/default-new.png')]);
	// 	$value->save();
	// }
	// dd($news);
});

Route::get('/react',function(){
	$items = array(
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
		['ten'=>'Châu Khải Phong','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/0/6/06283b53569a11840f9c1975080193cf_1520424291.jpg'],
		['ten'=>'Erik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/b/a/1/0/ba10c66afe56f9b300096005245db92f.jpg'],
		['ten'=>'Subin','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/7/f/7fdee502b70e45b4f5864df7f136ed26_1489566519.jpg'],
		['ten'=>'Đức Phúc','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/d/7/d7f34aa6b1112e4b605f6c6e7eccd162_1509437674.jpg'],
		['ten'=>'Karik','hinh'=>'https://zmp3-photo.zadn.vn/thumb/240_240/avatars/a/0/a0927398989d4c5b18c56880bd56442b_1509531352.jpg'],
	);
	return response()->json([
	    'status' => true,
	    'data' => $items
	]);

});