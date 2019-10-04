<?php

namespace App\Pages;

use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;

class Blog extends PageData
{
    use PageHasSlug, PageHasContent;

    /** @var \App\Pages\Post[] */
    public $posts;
}
