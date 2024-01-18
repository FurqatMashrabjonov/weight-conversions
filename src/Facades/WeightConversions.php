<?php

namespace Furqat\WeightConversions\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Furqat\WeightConversions\WeightConversions
 */
class WeightConversions extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Furqat\WeightConversions\WeightConversions::class;
    }
}
