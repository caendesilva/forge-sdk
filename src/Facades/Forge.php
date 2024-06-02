<?php

namespace Laravel\Forge\Facades;

use Illuminate\Support\Facades\Facade;
use Laravel\Forge\ForgeManager;

/**
 * @mixin \Laravel\Forge\Forge
 */
class Forge extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return ForgeManager::class;
    }
}
