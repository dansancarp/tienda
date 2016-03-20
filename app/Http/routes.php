<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
    	'as' => 'home',
    	'uses' => 'StoreController@index'
    	]);
    Route::get('product/{slug}',[
    	'as' => 'product-detail',
    	'uses' => 'StoreController@show'
    	]);
    //Carrito
    Route::get('cart/show',[
    	'as'=>'cart-show',
    	'uses'=>'CartController@show'
    	]);

    Route::bind('product',function($slug)
    {
    	return App\Product::where('slug',$slug)->first();
    });

    Route::get('cart/add/{product}',[
    	'as'=>'cart-add',
    	'uses'=>'CartController@add'
    	]);
    Route::get('cart/delete/{product}',[
        'as'=>'cart-delete',
        'uses'=>'CartController@delete'
        ]);
    Route::get('cart/trash}',[
        'as'=>'cart-trash',
        'uses'=>'CartController@trash'
        ]);
    Route::get('cart/update/{product}/{quantity?}',[
        'as'=>'cart-update',
        'uses'=>'CartController@update'
        ]);
    Route::get('order-detail',[    
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
    ])->middleware(['auth']);    

    //Paypal

    //Enviamos nuestro pedido a paypal
    Route::get('payment',array(
        'as'=>'payment',
        'uses'=>'PaypalController@postPayment'
        ));

    //Paypal redirecciona a esta ruta
    Route::get('payment/status',array(
        'as'=>'payment.status',
        'uses'=>'PaypalController@getPaymentStatus'
        ));


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'StoreController@index');
});

