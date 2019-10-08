<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Spatie\Snapshots\Drivers\HtmlDriver;
use Spatie\Snapshots\MatchesSnapshots;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, MatchesSnapshots;

    public function assertMatchesHtmlSnapshot($actual)
    {
        $this->assertMatchesSnapshot($actual, new HtmlDriver());
    }
}
