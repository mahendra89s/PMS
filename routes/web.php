<?php

use App\User;
use App\Http\Controllers\Admin\UserEdDelController;


Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('Admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/notification',function(){
        return view('Admin.notifications');
    })->name('admin.notifications');

    Route::get('/tables',function(){
        return view('Admin.tables');
    })->name('admin.tables');

    Route::get('/user',function(){
        $users = User::all();   
        return view('Admin.user',compact('users'));
    })->name('admin.user');


    Route::group(['prefix' => 'user-edit'],function(){
        Route::get('/{id}',function($id){
            $user = User::find($id);
            return view('Admin.user.edit',compact('user'));
        })->name('user.edit');
        Route::post('/edit/{id}','Admin\UserEdDelController@edit')->name('user.edit1');
        
    });
    
    Route::post('/user-delete/{id}','Admin\UserEdDelController@delete')->name('user.delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
