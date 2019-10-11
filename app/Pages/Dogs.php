<?php

namespace App\Pages;

use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;

class Dogs extends PageData implements Routable
{
    use PageHasSlug, PageHasContent, PageHasUrl;

    /** @var \App\Pages\Breed[] */
    public $dogs;

    public function getUrl(): string
    {
        return url('/dogs');
    }
}
