<?php

namespace Tripteki\Repository\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * @var array
     */
    protected $repositories = [];

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * @return void
     */
    public function boot()
    {
        foreach ($this->repositories as $contract => $implementation) {

            $this->app->bind($contract, $implementation);
        }
    }
};
