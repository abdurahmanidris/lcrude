<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Route::get('/home',[StudentController::class,'index'])->name('home.index');

//Route::get('/',[StudentController::class,'index'])->name('home');
Route::get('/',[StudentController::class,'index'])->name('home');
Route::get('/create',[StudentController::class,'create'])->name('create');
Route::post('/create',[StudentController::class,'store'])->name('store');
Route::get('/allstudent',[StudentController::class,'getAllStudent'])->name('allstudent');
Route::get('/edit/{id}',[StudentController::class,'edit'])->name('edit');
Route::post('/update/{id}',[StudentController::class,'update'])->name('update');
Route::delete('/delete/{id}',[StudentController::class,'delete'])->name('delete');
//Route::post('/create', 'StudentController@store')->name('store');;

/*Route::get('/create',function(){
    return view('create');
        
});-*


// to pass parameters
/*Route::get('/home/{name?}',[StudentController::class,'index'])->name('index');

Route::get('/',[TestController::class,'index'])->name('index');*/

//The following does not work in laravel x
/*Route::get('/', 'StudentController@index' );
Route::get('/test', 'TestController@index' );*/

/*Route::get('/hello', function () {
    return "Hello World";
});*/



/*Route::get('/user/{id}', function ($id) {
    return "Your id is ".$id;
});

Route::get('/user/{id}/{name}', function($id,$name)  
{  
  return "id number is : ". $id ." ".$name;   
}  
);
//To make the route parameter optional, you can place '?' operator after the parameter name
Route::get('user/{name?}', function ($name=null) {  
    return $name;  
});*/

/*Route::get('user/{name?}', function ($name=null) {  
    return $name;  
})->where('name','[a-zA-Z]+'); */


/*           
Route::get('user/{id?}', function ($id=null) {  
    return "ID is: ".$id;  
})->where('id','[0-9]+');*/

/*Route::get('user/{id}', function ($id) {  
 return $id;  
})->where('id','[0-9]+');;  
Route::get('post/{id}', function ($id) {  
 return $id;  
});*/



