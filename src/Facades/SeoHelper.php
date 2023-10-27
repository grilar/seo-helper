<?php

namespace Grilar\SeoHelper\Facades;

use Grilar\SeoHelper\SeoHelper as BaseSeoHelper;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Grilar\SeoHelper\SeoHelper setSeoMeta(\Grilar\SeoHelper\Contracts\SeoMetaContract $seoMeta)
 * @method static \Grilar\SeoHelper\SeoHelper setSeoOpenGraph(\Grilar\SeoHelper\Contracts\SeoOpenGraphContract $seoOpenGraph)
 * @method static \Grilar\SeoHelper\SeoHelper setSeoTwitter(\Grilar\SeoHelper\Contracts\SeoTwitterContract $seoTwitter)
 * @method static \Grilar\SeoHelper\Contracts\SeoOpenGraphContract openGraph()
 * @method static \Grilar\SeoHelper\SeoHelper setTitle(string|null $title, string|null $siteName = null, string|null $separator = null)
 * @method static \Grilar\SeoHelper\Contracts\SeoMetaContract meta()
 * @method static \Grilar\SeoHelper\Contracts\SeoTwitterContract twitter()
 * @method static string|null getTitle()
 * @method static string|null getDescription()
 * @method static \Grilar\SeoHelper\SeoHelper setDescription($description)
 * @method static mixed render()
 * @method static bool saveMetaData(string $screen, \Illuminate\Http\Request $request, \Grilar\Base\Models\BaseModel $object)
 * @method static bool deleteMetaData(string $screen, \Grilar\Base\Models\BaseModel $object)
 * @method static \Grilar\SeoHelper\SeoHelper registerModule(array|string $model)
 *
 * @see \Grilar\SeoHelper\SeoHelper
 */
class SeoHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return BaseSeoHelper::class;
    }
}
