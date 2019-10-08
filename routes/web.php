<?php

use Astrotomic\Stancy\Facades\PageFactory;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return PageFactory::makeFromSheetName('static', 'home');
});

Route::get('/blog', function () {
    return PageFactory::makeFromSheetName('static', 'blog');
});

Route::get('/blog/{post}', function (string $post) {
    return PageFactory::makeFromSheetName('blog', $post);
})->name('blog.post');

Route::feeds();
