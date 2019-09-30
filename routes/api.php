<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
    // $api->group(['prefix' => 'auth'], function(Router $api) {
    //     $api->post('signup', 'App\\Api\\V1\\Controllers\\SignUpController@signUp');
    //     $api->post('login', 'App\\Api\\V1\\Controllers\\LoginController@login');

    //     $api->post('recovery', 'App\\Api\\V1\\Controllers\\ForgotPasswordController@sendResetEmail');
    //     $api->post('reset', 'App\\Api\\V1\\Controllers\\ResetPasswordController@resetPassword');

    //     $api->post('logout', 'App\\Api\\V1\\Controllers\\LogoutController@logout');
    //     $api->post('refresh', 'App\\Api\\V1\\Controllers\\RefreshController@refresh');
    //     $api->get('me', 'App\\Api\\V1\\Controllers\\UserController@me');
    // });

    // $api->group(['middleware' => 'jwt.auth'], function(Router $api) {
    //     $api->get('protected', function() {
    //         return response()->json([
    //             'message' => 'Access to protected resources granted! You are seeing this text as you provided the token correctly.'
    //         ]);
    //     });

    //     $api->get('refresh', [
    //         'middleware' => 'jwt.refresh',
    //         function() {
    //             return response()->json([
    //                 'message' => 'By accessing this endpoint, you can refresh your access token at each request. Check out this response headers!'
    //             ]);
    //         }
    //     ]);
    // });

    // $api->get('hello', function() {
    //     return response()->json([
    //         'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
    //     ]);
    // });

    $api->group([
        'prefix' => 'public',
        'namespace' => 'App\Http\Controllers\Main'
    ], function(Router $api) {

        $api->get('hello', function() {
            return response()->json([
                'message' => 'This is a simple example of item returned by your APIs. Everyone can see it.'
            ]);
        });

        $api->get('getdata', 'DataController@getdata');

        $api->group(['prefix' => 'products'], function(Router $api) {
            $api->get('gender/{id}', 'ProductController@getByGender');
        });
        $api->group(['prefix' => 'badges'], function(Router $api) {
            $api->get('/', 'BadgeController@listBadge');
        });
    });

    // $api->group([
    //     'prefix' => 'private',
    //     'namespace' => 'App\Http\Controllers\Admin'
    // ], function(Router $api) {
    //     $api->group(['prefix' => 'product'], function(Router $api) {
    //         $api->get('/', 'ProductController@getProducts');
    //         $api->post('/store', 'ProductController@store');
    //         $api->get('/{id}', 'ProductController@getProductDetail');
    //     });
    //     $api->group(['prefix' => 'badge'], function(Router $api) {
    //         $api->get('/', 'BadgeController@list');
    //     });
    //     $api->group(['prefix' => 'gender'], function(Router $api) {
    //         $api->get('/', 'GenderController@list');
    //     });
    //     $api->group(['prefix' => 'brand'], function(Router $api) {
    //         $api->get('/', 'BrandController@list');
    //     });
    // });
});
