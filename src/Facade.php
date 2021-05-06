<?php

namespace OptimistDigital\LaravelHealthz;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return 'healthz';
    }

    /**
     * Register the healthz endpoint
     *
     * @param  array  $options
     * @return void
     */
    public static function endpoint(array $options = [])
    {
        static::$app->make('router')->healthz($options);
    }
}
