<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Ajitesh');
});

Route::post('/', function (Request $request) {
   $x=$request->input('name');
   echo "friend of ";
   echo $x;
   echo " is ";
     $users = DB::select('select name from USER where id IN(SELECT friend_id from USER,USER_ID where id=user_id AND name=?)',[$x]);
     $myJSON = json_encode($users);
     echo $myJSON;
});




