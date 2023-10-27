<?php

namespace Grilar\SeoHelper\Providers;

use Grilar\Base\Supports\ServiceProvider;
use Grilar\Base\Traits\LoadAndPublishDataTrait;
use Grilar\SeoHelper\Contracts\SeoHelperContract;
use Grilar\SeoHelper\Contracts\SeoMetaContract;
use Grilar\SeoHelper\Contracts\SeoOpenGraphContract;
use Grilar\SeoHelper\Contracts\SeoTwitterContract;
use Grilar\SeoHelper\SeoHelper;
use Grilar\SeoHelper\SeoMeta;
use Grilar\SeoHelper\SeoOpenGraph;
use Grilar\SeoHelper\SeoTwitter;

/**
 * @since 02/12/2015 14:09 PM
 */
class SeoHelperServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register(): void
    {
        $this->app->bind(SeoMetaContract::class, SeoMeta::class);
        $this->app->bind(SeoHelperContract::class, SeoHelper::class);
        $this->app->bind(SeoOpenGraphContract::class, SeoOpenGraph::class);
        $this->app->bind(SeoTwitterContract::class, SeoTwitter::class);

        $this->setNamespace('packages/seo-helper')
            ->loadHelpers();
    }

    public function boot(): void
    {
        $this
            ->loadAndPublishConfigurations(['general'])
            ->loadAndPublishViews()
            ->loadAndPublishTranslations()
            ->publishAssets();

        $this->app->register(EventServiceProvider::class);
        $this->app->register(HookServiceProvider::class);
    }
}
