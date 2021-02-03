<?php
/*
|--------------------------------------------------------------------------
| routes/web.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

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


Route::get('/','FrontendController@index')->name('home'); /* Lecture 6 */
Route::get(trans('routes.object').'/{id}','FrontendController@object')->name('object'); /* Lecture 5 Lecture 15 /{id}  */
Route::get(trans('routes.roomsearch'),'FrontendController@roomsearch')->name('roomSearch'); /* Lecture 5 */
Route::get(trans('routes.room'),'FrontendController@room')->name('room'); /* Lecture 6 */
Route::get(trans('routes.article'),'FrontendController@article')->name('article'); /* Lecture 6 */
Route::get(trans('routes.person'),'FrontendController@person')->name('person'); /* Lecture 6 */
 

 
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){  /* Lecture 6 Lecture 7 'middleware'=>'auth' */  
    
  Route::get('/','BackendController@index')->name('adminHome'); /* Lecture 6 */  
  Route::get(trans('routes.myobjects'),'BackendController@myobjects')->name('myObjects'); /* Lecture 6 */  
  Route::get(trans('routes.saveobject'),'BackendController@saveObject')->name('saveObject'); /* Lecture 6 */  
  Route::get(trans('routes.profile'),'BackendController@profile')->name('profile'); /* Lecture 6 */  
  Route::get(trans('routes.saveroom'),'BackendController@saveRoom')->name('saveRoom'); /* Lecture 6 */  
  Route::get('/cities','BackendController@cities')->name('cities.index'); /* Lecture 6 */  
    
    
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');  /* Lecture 7 */

