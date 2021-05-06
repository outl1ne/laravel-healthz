<?php

namespace OptimistDigital\LaravelHealthz;

use Illuminate\Routing\Controller as BaseController;

class HealthzController extends BaseController
{
    public function healthz()
    {
        return response('/healthz');
    }
}
