<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;

final class ResponseTest extends TestCase
{
    public function test_home(): void
    {
        $this->assertMatchesHtmlSnapshot($this->get('/')->getContent());
    }

    public function test_blog(): void
    {
        $this->assertMatchesHtmlSnapshot($this->get('/blog')->getContent());
    }

    public function test_blog_first_post(): void
    {
        $this->assertMatchesHtmlSnapshot($this->get('/blog/first-post')->getContent());
    }

    public function test_blog_second_post(): void
    {
        $this->assertMatchesHtmlSnapshot($this->get('/blog/second-post')->getContent());
    }

    public function test_dogs(): void
    {
        $this->assertMatchesHtmlSnapshot($this->get('/dogs')->getContent());
    }

    public function test_blog_atom_feed(): void
    {
        $this->assertMatchesXmlSnapshot($this->get('/feed/blog.atom')->getContent());
    }

    public function test_blog_rss_feed(): void
    {
        $this->assertMatchesXmlSnapshot($this->get('/feed/blog.rss')->getContent());
    }

    public function test_sitemap(): void
    {
        Carbon::setTestNow('2019-10-08T14:53:32+00:00');

        $this->assertMatchesXmlSnapshot($this->get('/sitemap.xml')->getContent());
    }
}
