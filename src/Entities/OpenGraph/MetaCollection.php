<?php

namespace Grilar\SeoHelper\Entities\OpenGraph;

use Grilar\SeoHelper\Bases\MetaCollection as BaseMetaCollection;

class MetaCollection extends BaseMetaCollection
{
    protected $prefix = 'og:';

    protected $nameProperty = 'property';
}
