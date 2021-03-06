<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('page/{page:slug}', function (\TCG\Voyager\Models\Page $page) {
    return view('page.show', ['page'=>$page]);
})->name('page.show');

Route::get('post/{post:slug}', function (\TCG\Voyager\Models\Post $post) {
    return view('post.show', ['post'=>$post]);
})->name('post.show');

foreach (\TCG\Voyager\Models\MenuItem::where('menu_id', 2)->cursor() as $menu) {
    Route::get($menu->url, function(){
        return view('menu.index');
    })->name($menu->url);
}

Route::post('category', function () {
    if(request()->input('categories') == null){
        return abort(404);
    }
    return view('category.index');
})->name('category');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
