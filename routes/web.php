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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api/v1'], function () {
    Route::get('places',function(){
        return [
            [
                'id' => 1,
                'name'=>'Titik Singgah',
                'location' => 'Jl. Ki Hajar Dewantara',
                'img_profile' => 'https://lorempixel.com/400/200/food/1',
                'img_cover' => 'https://lorempixel.com/400/200/food/1',
                'review' => 2,
                'rate' => 3,
            ],
            [
                'id' => 2,
                'name'=>'Kayu Watu',
                'location' => 'Jl. Ki Hajar Dewantara Gang Teladan',
                'img_profile' => 'https://lorempixel.com/400/200/food/2',
                'img_cover' => 'https://lorempixel.com/400/200/food/2',
                'review' => 3,
                'rate' => 2,
            ],
        ];
    });

    Route::get('places/1',function(){
        return [
            
                'id' => 1,
                'name'=>'Titik Singgah',
                'location' => 'Jl. Ki Hajar Dewantara',
                'description' => 'Ut eiusmod eiusmod magna proident commodo enim dolore occaecat consectetur eu quis exercitation pariatur.',
                'img_profile' => 'https://lorempixel.com/400/200/food/1',
                'img_cover' => 'https://lorempixel.com/400/200/food/1',
                'review' => 2,
                'rate' => 3,
        ];
    });

    Route::get('places/2',function(){
        return [
                'id' => 2,
                'name'=>'Kayu Watu',
                'location' => 'Jl. Ki Hajar Dewantara Gang Teladan',
                'description' => 'Nisi velit Lorem culpa nulla mollit aute dolor commodo eu eiusmod enim in.',
                'img_profile' => 'https://lorempixel.com/400/200/food/2',
                'img_cover' => 'https://lorempixel.com/400/200/food/2',
                'review' => 3,
                'rate' => 2,
        ];
    });

    Route::post('reviews/{id}','Api\ReviewController@store');

    Route::get('reviews/1',function(){
        return [
            [
                'name'=>'Arief Adjie Wicaksono',
                'message' => 'Eiusmod non exercitation aute dolor elit do nulla quis cupidatat tempor cupidatat veniam do.',
                'rate' => 2,
            ],
            [
                'name'=>'Ismy Amnestya Yunani',
                'message' => 'Amet anim cupidatat id voluptate occaecat dolore aute mollit ex voluptate consectetur enim deserunt nulla.',
                'rate' => 3,
            ],
        ];
    });

    Route::get('reviews/2',function(){
        return [
            [
                'name'=>'John Doe',
                'message' => 'Esse eiusmod id esse irure eiusmod pariatur dolore Lorem laboris.',
                'rate' => 3,
            ],
            [
                'name'=>'Jane Doe',
                'message' => 'Dolor aliquip sunt amet laborum anim.',
                'rate' => 1,
            ],
            [
                'name'=>'Lucinta Luna',
                'message' => 'Amet laboris nulla aute id aliqua consequat adipisicing ipsum nulla sunt excepteur pariatur.',
                'rate' => 2,
            ],
        ];
    });

});