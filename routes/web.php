<?php

use Astrotomic\Stancy\Facades\PageFactory;
use Astrotomic\Stancy\Facades\SitemapFactory;
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

Route::get('/dogs', function () {
    return PageFactory::makeFromSheetName('static', 'dogs');
});

Route::get('/sitemap.xml', function () {
    return SitemapFactory::makeFromSheetList(['static', 'blog']);
});

Route::feeds();
