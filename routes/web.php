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

Route::get('/', 'HomeController@home2');

Route::get('/infantdetails',function(){
    return view('forms.infant_details');});

Route::get('/parentdetails',function(\Illuminate\Http\Request $request){
    $infant = $request->infant_id;
    return view('forms.parent_details', compact('infant'));});

Route::get('/appointments', function () {
    return view('forms.appointments');
});

Route::get('/addusers', function () {
    return view('forms.add_users');
});

Route::get('/immunize', function () {
    return view('forms.immunize');
});
Route::get('/infantmaster','InfantController@showinfant');
Route::get('/referred','InfantController@referred');
Route::get('/femaleinfants','InfantController@femaleinfants');
Route::get('/maleinfants','InfantController@maleinfants');

Route::get('/usersmaster','AddUserController@showusers');
Route::get('/showimmunization','ImmunizationController@showimmunization');


Route::get('/infantmasterreport','InfantController@reportinfant');
Route::get('/infant/delete/{id}','InfantController@delete');
Route::get('/adduser/delete/{id}','AddUserController@delete');
Route::post('/edit_user','AddUserController@updateUser');
Route::get('/edit_user','AddUserController@updateUserview');

Route::get('/special_needs_infants','InfantController@getInfantsWithSpecialNeeds');
Route::get('/birthdates','InfantController@getInfantsWithBirthDates');
Route::get('/viewappointments', 'AppointmentController@getappointment');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/save-infant', 'InfantController@infant');
Route::post('/infant/edit', 'InfantController@edit');
Route::post('/user/edit', 'AddUserController@edit');

Route::post('/save-parent', 'ParentController@parent');

Route::post('/save-appointment', 'AppointmentController@appointment');

Route::post('/save-adduser', 'AddUserController@adduser');
Route::post('/save-edituser', 'AddUserController@editUser');
Route::post('/save-immunization', 'ImmunizationController@immunization');




