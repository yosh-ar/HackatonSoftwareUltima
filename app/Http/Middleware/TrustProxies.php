<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
=======
use Fideloper\Proxy\TrustProxies as Middleware;
use Illuminate\Http\Request;
>>>>>>> origin/Arturo

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array|string
>>>>>>> origin/Arturo
     */
    protected $proxies;

    /**
<<<<<<< HEAD
     * The current proxy header mappings.
     *
     * @var array
     */
    protected $headers = [
        Request::HEADER_FORWARDED => 'FORWARDED',
        Request::HEADER_X_FORWARDED_FOR => 'X_FORWARDED_FOR',
        Request::HEADER_X_FORWARDED_HOST => 'X_FORWARDED_HOST',
        Request::HEADER_X_FORWARDED_PORT => 'X_FORWARDED_PORT',
        Request::HEADER_X_FORWARDED_PROTO => 'X_FORWARDED_PROTO',
    ];
=======
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
>>>>>>> origin/Arturo
}
