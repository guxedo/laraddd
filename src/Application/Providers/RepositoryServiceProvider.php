<?php

namespace Laraddd\Application\Providers;

use Illuminate\Support\ServiceProvider;
use Laraddd\Domain\User\UserRepository;
use Laraddd\Infrastructure\Eloquents\User;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind(UserRepository::class, User::class);
    }
}
