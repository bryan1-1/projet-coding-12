<?php

use App\Adress;
use Illuminate\Support\Facades\Route;
use App\Intro;
use App\Feature;
use App\Footer;
use App\Link;
use App\Map;
use App\NewsLetter;
use App\Projects;
use App\Social;
use App\Team;
use App\Work;
use Illuminate\Support\Facades\DB;

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
    $intro=Intro::all();
    $work=Work::all();
    $project=Projects::all();
    $address=Adress::all();
    $team = Team::all();
    $social = Social::all();
    $footer=Footer::all();
    $map=Map::all();
    $link=Link::all();
    $newsLetter=NewsLetter::all();
    $feature= DB::table('features')->paginate(3)->fragment('features');
    return view('index',['data'=>$feature],compact('intro','feature','work','project','team','address','social','map','footer','link','newsLetter'));
})->name('main');
Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/intro','IntroController');
Route::resource('/contact','ContactController');
Route::resource('/feature', 'FeaturesController');
Route::resource('/work','WorkController');
Route::resource('/team','TeamController');
Route::resource('/address','AdressController');
Route::resource('/social', 'SocialController');
Route::resource('/map','MapController');
Route::resource('/footer','FooterController');
Route::resource('/link','LinkController');
Route::resource('/News','NewsLetterController');
Route::get('test','Pagination@list');