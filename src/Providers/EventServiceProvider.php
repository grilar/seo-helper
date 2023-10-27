<?php

namespace Grilar\SeoHelper\Providers;

use Grilar\Base\Events\CreatedContentEvent;
use Grilar\Base\Events\DeletedContentEvent;
use Grilar\Base\Events\UpdatedContentEvent;
use Grilar\SeoHelper\Listeners\CreatedContentListener;
use Grilar\SeoHelper\Listeners\DeletedContentListener;
use Grilar\SeoHelper\Listeners\UpdatedContentListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UpdatedContentEvent::class => [
            UpdatedContentListener::class,
        ],
        CreatedContentEvent::class => [
            CreatedContentListener::class,
        ],
        DeletedContentEvent::class => [
            DeletedContentListener::class,
        ],
    ];
}
