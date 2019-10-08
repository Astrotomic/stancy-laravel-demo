<?php

namespace App\Pages;

use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasDate;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Feed\FeedItem;

class Breed extends PageData
{
    use PageHasSlug;

    /** @var string[] */
    public $images;

    /** @var bool */
    public $success;

    public function __construct(array $parameters)
    {
        if (isset($parameters['message']) && is_array($parameters['message'])) {
            $parameters['images'] = $parameters['message'];
            unset($parameters['message']);
        }

        if (isset($parameters['status']) && is_string($parameters['status'])) {
            $parameters['success'] = $parameters['status'] === 'success';
            unset($parameters['status']);
        }

        parent::__construct($parameters);
    }
}
