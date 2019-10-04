<?php

use Astrotomic\Stancy\Contracts\FeedFactory;

return [
    'feeds' => [
        'blog' => [
            'items' => [FeedFactory::class.'@makeFromSheetCollectionName', 'blog'],
            'url' => 'feed/blog',
            'title' => 'Stancy Blog Feed',
            'description' => 'This is the Stancy Laravel demo blog feed.',
            'language' => 'en-US',
            'view' => 'feed::feed',
        ],
    ],
];
