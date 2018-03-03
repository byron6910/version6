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

//utilizo web para obtener errores
// Route::get('/', function () {
//     return view('auth.login');
// });

//Home related routes
Route::get(
    '/', ['as' => 'login', function () {
        return response()->view('auth.login');
    }]
);

// User related routes
Route::get(
    '/user',
    ['as' => 'user-index',
     'middleware' => 'auth',
     'uses' => 'UserController@show']
);

//index
Route::get(
    '/user/index',
    [
     'middleware' => 'auth',
     'uses' => 'UserController@index']
);

Route::get(
    '/administrador',
    [
     'middleware' => 'admin1',
     'uses' => 'UserController@index']
);

Route::post('/reserva/insert/user',['as'=>'postInsertUser','uses'=>'ReservaController@postInsertUser']);
Route::post('/reserva/insert/viaje',['as'=>'postInsertViaje','uses'=>'ReservaController@postInsertViaje']);

Route::post('/reserva/insert/cooperativa',['as'=>'postInsertCooperativa','uses'=>'ReservaController@postInsertCooperativa']);
Route::post('/reserva/insert/origen',['as'=>'postInsertOrigenDestino','uses'=>'ReservaController@postInsertOrigenDestino']);
Route::get('/reserva/insert/viaje/id',['as'=>'getShowViaje','uses'=>'ReservaController@getShowViaje']);


Route::post('/reserva/insert/bus',['as'=>'postInsertBus','uses'=>'ReservaController@postInsertBus']);
Route::post('/reserva/insert/reserva',['as'=>'createReserva','uses'=>'ReservaController@createReserva']);


Route::get('/reserva/insert/reserva-information',['as'=>'showReservaInformation','uses'=>'ReservaController@showReservaInformation']);
Route::get('/reserva/insert/reserva-info',['as'=>'ReservaInformation','uses'=>'ReservaController@ReservaInformation']);

Route::post('/reserva/eliminar/reserva',['as'=>'deleteReserva','uses'=>'ReservaController@deleteReserva']);
Route::get('/reserva/reserva-edit',['as'=>'editReserva','uses'=>'ReservaController@editReserva']);

Route::post('/reserva/update/reserva',['as'=>'updateReservaInfo','uses'=>'ReservaController@updateReservaInfo']);




//Route::post('/viaje/insert/horario',['as'=>'postInsertHorario','uses'=>'ViajeController@postInsertHorario']);


//Route::resource('user', 'UserController',['only'=>['index','edit','update','delete']]);
Route::resource('user', 'UserController',['except'=>['index','create','store','show']]);



Route::get(
    '/user/new', ['as' => 'user-new', function() {
        return response()->view('newUser');
    }]
);

Route::post(
    '/user/create',
    ['uses' => 'UserController@createNewUser', 'as' => 'user-create', ]
);


Route::get(
    '/user/verify', ['as' => 'user-show-verify', function() {
        return response()->view('verifyUser');
    }]
);

Route::post(
    '/user/verify',
    ['uses' => 'UserController@verify', 'as' => 'user-verify', ]
);

//completar datos

Route::post(
    '/user/verify/post',
    ['uses' => 'UserController@Postverify', 'as' => 'user-postverify', ]
);

Route::post(
    '/user/verify/resend',
    ['uses' => 'UserController@verifyResend',
     'middleware' => 'auth',
     'as' => 'user-verify-resend']
);


Route::get('/error', function () {
    return view('Mensajes.permisos');
});

Route::get('/profile', 'UserController@profile');
Route::post('/profile', 'UserController@update_profile');

//verificar correo
Route::get('/register/verify/{code}', 'Auth/RegisterController@verify');

//verificar telefono pruebas
// Route::get('/register/verify/send', 'VerificacionController@requestSms');
// Route::get('/register/verify/', 'VerificacionController@get_Confirm_phone');
// Route::post('/register/verify/', 'VerificacionController@post_Confirm_phone');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Route::group(['middleware'=>'admin'],function(){


    Route::resource('bus', 'BusController');

    Route::resource('cooperativa', 'Cooperativa_Controller');
    Route::resource('origen_destino', 'OrigenDestino_Controller');

    Route::resource('viaje', 'ViajeController');
    Route::resource('reserva', 'ReservaController');    
    Route::resource('horario','HorariosController');
    Route::resource('detalle','DetalleController');


//});


Route::get('sendermail',function(){
    
        $data=array('name'=>"App Bus");
    
        Mail::send('email.mail',$data,function($message){
    
            $message->from('bralvarezm@gmail.com','Prueba');
            $message->to('bralvarezm@gmail.com')->subject('test email');
            
        });
        return "Tu correo ha sido enviado";
    
    });
    

