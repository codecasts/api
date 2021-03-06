<?php

namespace Codecasts\Domains\Users\Providers;

use Codecasts\Domains\Users\Database\Migrations\AlterGuestsOnUsersTable;
use Codecasts\Domains\Users\Database\Migrations\CreateOauthIdentitiesTable;
use Codecasts\Support\Domain\ServiceProvider;
use Codecasts\Domains\Users\Database\Factories\UserFactory;
use Codecasts\Domains\Users\Database\Migrations\CreateUsersTable;
use Codecasts\Domains\Users\Database\Seeders\UsersSeeder;
use Codecasts\Domains\Users\Contracts;
use Codecasts\Domains\Users\Repositories;

/**
 * Class DomainServiceProvider.
 */
class DomainServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $alias = 'users';

    /**
     * @var array
     */
    protected $bindings = [
        Contracts\UserRepository::class => Repositories\UserRepository::class,
    ];

    protected $migrations = [
        // base user migrations
        CreateUsersTable::class,
        CreateOauthIdentitiesTable::class,
        AlterGuestsOnUsersTable::class,
    ];

    protected $seeders = [
        UsersSeeder::class,
    ];

    protected $factories = [
        UserFactory::class,
    ];
}

