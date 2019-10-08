<?php

namespace App\Pages;

use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Spatie\Sitemap\Tags\Tag;
use Spatie\Sitemap\Tags\Url;

class Home extends PageData
{
    use PageHasSlug, PageHasContent;

    public function toSitemapItem(): Tag
    {
        return Url::create(url('/'));
    }
}
