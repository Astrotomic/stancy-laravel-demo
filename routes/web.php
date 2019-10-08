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
    $sitemap = SitemapFactory::makeFromSheetCollectionName('static');

    foreach(SitemapFactory::makeFromSheetCollectionName('blog')->getTags() as $tag) {
        $sitemap->add($tag);
    }

    return $sitemap;
});

Route::feeds();
