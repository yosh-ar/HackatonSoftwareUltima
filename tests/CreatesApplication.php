<?php

namespace Tests;

<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> origin/Arturo
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

<<<<<<< HEAD
        Hash::setRounds(4);

=======
>>>>>>> origin/Arturo
        return $app;
    }
}
