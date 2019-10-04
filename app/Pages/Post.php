<?php

namespace App\Pages;

use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasDate;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Carbon\Carbon;

class Post extends PageData
{
    use PageHasSlug, PageHasContent, PageHasDate;

    /** @var string */
    public $title;

    /** @var string */
    public $image;

    public function __construct(array $parameters)
    {
        if (isset($parameters['date']) && is_string($parameters['date'])) {
            $parameters['date'] = Carbon::make($parameters['date']);
        }

        parent::__construct($parameters);
    }
}
