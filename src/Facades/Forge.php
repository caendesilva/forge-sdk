<?php

namespace Laravel\Forge\Facades;

use Laravel\Forge\ForgeManager;
use Illuminate\Support\Facades\Facade;

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
