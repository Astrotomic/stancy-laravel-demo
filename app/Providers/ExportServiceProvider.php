<?php

namespace App\Providers;

use Astrotomic\Stancy\Contracts\ExportFactory as ExportFactoryContract;
use Illuminate\Support\ServiceProvider;

class ExportServiceProvider extends ServiceProvider
{
    public function boot(ExportFactoryContract $exportFactory)
    {
        $this->app->booted(function () use ($exportFactory) {
            $exportFactory
                ->addFeeds()
                ->addSheetList(['static:home', 'static:blog'])
                ->addSheetCollectionName('blog')
            ;
        });
    }
}
