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
 //    $users = DB::select('select name from USER where id IN(SELECT friend_id from USER,USER_ID where id=user_id AND name=?)',[$x]);
   //  
   $x=DB::select('select *from CMS_DB');
   $myJSON = json_encode($x);
     echo $myJSON;
});

Route::get('/app/',function(){
	return view('CMS');
});

Route::get('/app/getarticles',function(){

   $x=DB::select('select title from CMS_DB');
return view('viewArticles',['x'=>$x]);
});

Route::post('/app/',function(Request $request){
	$var=$request->input('id');
  $x= $var["title"];
  $y=$var["description"];
  
DB::insert('insert into CMS_DB (title,DESCRIPTION) values (?, ?)', [$x,$y]);
	
});
Route::get('app/getitem/{name}',function($name)
{
    $x=DB::select('select DESCRIPTION from CMS_DB where title=?',[$name]);
     //$myJSON = json_encode($x);
     //echo $myJSON;
    //echo $x->DESCRIPTION;
    return view('Description',['x'=>$x]);
});




