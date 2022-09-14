<?php

namespace App\Providers;

use App\Contracts\SeatInterface;
use App\Implementations\SeatImplementation;
use App\Repository\SeatRepository;
use Illuminate\Support\ServiceProvider;


class RepositoriesServiceProvider extends ServiceProvider
{

    public function register()
    {

        $this->app->bind(
            SeatInterface::class,
            SeatImplementation::class
        );
    }
}

?>
