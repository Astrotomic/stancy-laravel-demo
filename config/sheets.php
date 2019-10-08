<?php

use Spatie\Sheets\ContentParsers\JsonParser;

return [
    'default_collection' => 'static',

    'collections' => [
        'static',
        'blog',
        'dogs' => [
            'content_parser' => JsonParser::class,
            'extension' => 'json',
        ],
    ],
];
