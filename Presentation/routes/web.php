<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\URL;

// a class that provides access to an object from the container
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

Route::get('/', function () {
    return view('welcome');
});

//  Helpers to generate URLs: 
// url() 
// route() -> generate a url to a named route using the route method. easy to pass parameters 
// action() -> pass controller, method

Route::get('generate', function () {
    // Generate an absolute url to the homepage and pass parameters
    // The to method, however, does not validate whether the Url exists or not.
    return URL::to('/', ['id' => 1, 'foo' => 'bar']);
  
 });

Route::get('test', function(){
    // return URL::current();
    // return URL::previous();
    // echo "This is a test route ";

    // generate url for a route
    // echo url("call/5");

    // generate current url
    // echo url()->current();

    // get full url value
    // echo url()->full();

    // echo URL::full();

    // echo route("call", ["id" => 3]);

    // echo route("sample.method");

    // echo action([StudentController::class, "Sample"]);
});

Route::get('call/{id}', function($id){
    // echo "This is a call route ".$id;

    // echo url()->full();
})->name("call");

Route::get('sample', [StudentController::class, "Sample"])->name("sample.method");