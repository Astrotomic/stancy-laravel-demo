<?php

use Astrotomic\Stancy\Contracts\PageFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return app(PageFactory::class)->makeFromSheetName('static', 'home');
});

Route::get('/blog', function () {
    return app(PageFactory::class)->makeFromSheetName('static', 'blog');
});

Route::get('/blog/{post}', function (string $post) {
    return app(PageFactory::class)->makeFromSheetName('blog', $post);
})->name('blog.post');

Route::feeds();
