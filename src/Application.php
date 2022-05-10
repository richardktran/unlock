<?php

namespace Khoatran\Unlock;

use Khoatran\Unlock\Services\ServiceProvider;

class Application
{
    /**
     * @return void
     */
    public function run(): void
    {
        Route::handle();
    }
}
