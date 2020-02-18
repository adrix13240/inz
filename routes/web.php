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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

    Route::get('/', function(){return view('home');});
    Route::view('/firma', 'firma');
    Route::view('/kontakt', 'kontakt');

    //Route::group([
    //    'middleware' => 'roles',
    //    'roles' => 'Admin'
    //], function() {
    Route::get('marka', ['uses' => 'MarkaController@index', 'as' => 'marka.index']);
    Route::get('marka/create', ['uses' => 'MarkaController@create', 'as' => 'marka.create']);
    Route::post('marka/store', ['uses' => 'MarkaController@store', 'as' => 'marka.store']);
    Route::get('marka/edit/{marka}', ['uses' => 'MarkaController@edit', 'as' => 'marka.edit']);
    Route::put('marka/{marka}', ['uses' => 'MarkaController@update', 'as' => 'marka.update']);
    Route::delete('marka/{marka}', ['uses' => 'MarkaController@destroy', 'as' => 'marka.delete']);

    Route::get('rezerwacja', ['uses' => 'RezerwacjaController@index', 'as' => 'rezerwacja.index']);
    Route::get('rezerwacja/create', ['uses' => 'RezerwacjaController@create', 'as' => 'rezerwacja.create']);
    //Route::get('rezerwacja/create/{samochod}', ['uses' => 'RezerwacjaController@create', 'as' => 'rezerwacja.create.samochod']);
    Route::get('rezerwacja/create/{samochod}', function (\App\Samochod $samochod) {return $samochod->id;} )->name('rezerwacja.create.samochod');
    Route::post('rezerwacja/store', ['uses' => 'RezerwacjaController@store', 'as' => 'rezerwacja.store']);
    Route::get('rezerwacja/edit/{rezerwacja}', ['uses' => 'RezerwacjaController@edit', 'as' => 'rezerwacja.edit']);
    Route::put('rezerwacja/{rezerwacja}', ['uses' => 'RezerwacjaController@update', 'as' => 'rezerwacja.update']);
    Route::delete('rezerwacja/{rezerwacja}', ['uses' => 'RezerwacjaController@destroy', 'as' => 'rezerwacja.delete']);

    Route::get('samochod', ['uses' => 'SamochodController@index', 'as' => 'samochod.index']);
    Route::get('samochod/create', ['uses' => 'SamochodController@create', 'as' => 'samochod.create']);
    Route::post('samochod/store', ['uses' => 'SamochodController@store', 'as' => 'samochod.store']);
    Route::get('samochod/edit/{samochod}', ['uses' => 'SamochodController@edit', 'as' => 'samochod.edit']);
    Route::put('samochod/{samochod}', ['uses' => 'SamochodController@update', 'as' => 'samochod.update']);
    Route::delete('samochod/{samochod}', ['uses' => 'SamochodController@destroy', 'as' => 'samochod.delete']);

    Route::get('segment', ['uses' => 'SegmentController@index', 'as' => 'segment.index']);
    Route::get('segment/create', ['uses' => 'SegmentController@create', 'as' => 'segment.create']);
    Route::post('segment/store', ['uses' => 'SegmentController@store', 'as' => 'segment.store']);
    Route::get('segment/edit/{segment}', ['uses' => 'SegmentController@edit', 'as' => 'segment.edit']);
    Route::put('segment/{segment}', ['uses' => 'SegmentController@update', 'as' => 'segment.update']);
    Route::delete('segment/{segment}', ['uses' => 'SegmentController@destroy', 'as' => 'segment.delete']);

    Route::get('statusRezerwacji', ['uses' => 'StatusRezerwacjiController@index', 'as' => 'statusRezerwacji.index']);
    Route::get('statusRezerwacji/create', ['uses' => 'StatusRezerwacjiController@create', 'as' => 'statusRezerwacji.create']);
    Route::post('statusRezerwacji/store', ['uses' => 'StatusRezerwacjiController@store', 'as' => 'statusRezerwacji.store']);
    Route::get('statusRezerwacji/edit/{statusRezerwacji}', ['uses' => 'StatusRezerwacjiController@edit', 'as' => 'statusRezerwacji.edit']);
    Route::put('statusRezerwacji/{statusRezerwacji}', ['uses' => 'StatusRezerwacjiController@update', 'as' => 'statusRezerwacji.update']);
    Route::delete('statusRezerwacji/{statusRezerwacji}', ['uses' => 'StatusRezerwacjiController@destroy', 'as' => 'statusRezerwacji.delete']);

    Route::get('terminRezerwacji', ['uses' => 'TerminRezerwacjiController@index', 'as' => 'terminRezerwacji.index']);
    Route::get('terminRezerwacji/create', ['uses' => 'TerminRezerwacjiController@create', 'as' => 'terminRezerwacji.create']);
    Route::post('terminRezerwacji/store', ['uses' => 'TerminRezerwacjiController@store', 'as' => 'terminRezerwacji.store']);
    Route::get('terminRezerwacji/edit/{terminRezerwacji}', ['uses' => 'TerminRezerwacjiController@edit', 'as' => 'terminRezerwacji.edit']);
    Route::put('terminRezerwacji/{terminRezerwacji}', ['uses' => 'TerminRezerwacjiController@update', 'as' => 'terminRezerwacji.update']);
    Route::delete('terminRezerwacji/{terminRezerwacji}', ['uses' => 'TerminRezerwacjiController@destroy', 'as' => 'terminRezerwacji.delete']);

    Route::get('oddzial', ['uses' => 'OddzialController@index', 'as' => 'oddzial.index']);
    Route::get('oddzial/create', ['uses' => 'OddzialController@create', 'as' => 'oddzial.create']);
    Route::post('oddzial/store', ['uses' => 'OddzialController@store', 'as' => 'oddzial.store']);
    Route::get('oddzial/edit/{oddzial}', ['uses' => 'OddzialController@edit', 'as' => 'oddzial.edit']);
    Route::put('oddzial/{oddzial}', ['uses' => 'OddzialController@update', 'as' => 'oddzial.update']);
    Route::delete('oddzial/{oddzial}', ['uses' => 'OddzialController@destroy', 'as' => 'oddzial.delete']);

    Route::get('ubezpieczenie', ['uses' => 'UbezpieczenieController@index', 'as' => 'ubezpieczenie.index']);
    Route::get('ubezpieczenie/create', ['uses' => 'UbezpieczenieController@create', 'as' => 'ubezpieczenie.create']);
    Route::post('ubezpieczenie/store', ['uses' => 'UbezpieczenieController@store', 'as' => 'ubezpieczenie.store']);
    Route::get('ubezpieczenie/edit/{ubezpieczenie}', ['uses' => 'UbezpieczenieController@edit', 'as' => 'ubezpieczenie.edit']);
    Route::put('ubezpieczenie/{ubezpieczenie}', ['uses' => 'UbezpieczenieController@update', 'as' => 'ubezpieczenie.update']);
    Route::delete('ubezpieczenie/{ubezpieczenie}', ['uses' => 'UbezpieczenieController@destroy', 'as' => 'ubezpieczenie.delete']);

    Route::get('oferta', ['uses' => 'OfertaController@index', 'as' => 'oferta.index']);

    Route::get('users/edit/1', ['uses' => 'UserController@edit', 'as' => 'users.edit']);
    Route::put('users/{user}', ['uses' => 'UsersController@update', 'as' => 'users.update']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
