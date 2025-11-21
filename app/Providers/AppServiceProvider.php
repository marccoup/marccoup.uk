<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Statamic\Entries\Entry;
use Statamic\Statamic;
use Statamic\StaticSite\SSG;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        SSG::addUrls(function () {
            $urls = [];

            $postTypes = Entry::query()
                ->where('collection', 'posts')
                ->pluck('blueprint')
                ->unique();

            foreach ($postTypes as $postType) {
                $urls[] = "posts/type/{$postType}";
            }

            return $urls;
        });
    }
}
