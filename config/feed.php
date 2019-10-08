<?php

use Astrotomic\Stancy\Contracts\FeedFactory;

return [
    'feeds' => [
        'blog.atom' => [
            'items' => [FeedFactory::class.'@makeFromSheetCollectionName', 'blog'],
            'url' => 'feed/blog.atom',
            'title' => 'Stancy Blog Feed',
            'description' => 'This is the Stancy Laravel demo blog feed.',
            'language' => 'en-US',
            'view' => 'feed::atom',
            'type' => 'application/atom+xml',
        ],
        'blog.rss' => [
            'items' => [FeedFactory::class.'@makeFromSheetCollectionName', 'blog'],
            'url' => 'feed/blog.rss',
            'title' => 'Stancy Blog Feed',
            'description' => 'This is the Stancy Laravel demo blog feed.',
            'language' => 'en-US',
            'view' => 'feed::rss',
            'type' => 'application/rss+xml',
        ],
    ],
];
