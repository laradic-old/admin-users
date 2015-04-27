<?php

use Illuminate\Contracts\Foundation\Application;
use Laradic\Extensions\Extension;
use Laradic\Extensions\ExtensionFactory;
use Symfony\Component\VarDumper\VarDumper;

return array(
    'name' => 'Users',
    'slug' => 'laradic-admin/users',
    'dependencies' => [
        'laradic-admin/core'
    ],
    'seeds' => [
        #base_path('vendor/rydurham/sentinel/src/seeds/DatabaseSeeder.php') => 'SentinelDatabaseSeeder'
    ],
    'register' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
        $app->register('LaradicAdmin\Users\UsersServiceProvider');
    },
    'boot' => function(Application $app, Extension $extension, ExtensionFactory $extensions)
    {
    },
);
