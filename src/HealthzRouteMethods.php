<?php

namespace OptimistDigital\LaravelHealthz;

class HealthzRouteMethods
{
    public function healthz()
    {
        return function ($options = []) {
            $this->get('healthz', 'OptimistDigital\LaravelHealthz\HealthzController@healthz')->name('healthz');
        };
    }
}
