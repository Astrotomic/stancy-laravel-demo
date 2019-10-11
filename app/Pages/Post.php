<?php

namespace App\Pages;

use Astrotomic\Stancy\Contracts\Routable;
use Astrotomic\Stancy\Models\PageData;
use Astrotomic\Stancy\Traits\PageHasContent;
use Astrotomic\Stancy\Traits\PageHasDate;
use Astrotomic\Stancy\Traits\PageHasSlug;
use Astrotomic\Stancy\Traits\PageHasUrl;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Spatie\Feed\FeedItem;

class Post extends PageData implements Routable
{
    use PageHasSlug, PageHasContent, PageHasDate, PageHasUrl;

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

    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->slug)
            ->link($this->getUrl())
            ->title($this->title)
            ->author('Gummibeer, dev.gummibeer@gmail.com')
            ->updated($this->date)
            ->summary(Str::words(strip_tags($this->contents), 50, ''));
    }

    public function getUrl(): string
    {
        return route('blog.post', ['post' => $this->slug]);
    }
}
