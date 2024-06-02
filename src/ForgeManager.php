<?php

namespace Laravel\Forge;

use Illuminate\Support\Traits\ForwardsCalls;

/**
 * @mixin \Laravel\Forge\Forge
 */
class ForgeManager
{
    use ForwardsCalls;

    /**
     * The Forge instance.
     *
     * @var \Laravel\Forge\Forge
     */
    protected $forge;

    /**
     * Create a new Forge manager instance.
     *
     * @param  string  $token
     */
    public function __construct($token)
    {
        $this->forge = new Forge($token);
    }

    /**
     * Dynamically pass methods to the Forge instance.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call(string $method, array $parameters): mixed
    {
        return $this->forwardCallTo($this->forge, $method, $parameters);
    }
}
