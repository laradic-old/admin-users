<?php
/**
 * Part of  Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.org
 */
namespace LaradicAdmin\Users;

use Laradic\Config\Traits\ConfigProviderTrait;
use Laradic\Support\ServiceProvider;

/**
 * {@inheritdoc}
 */
class UsersServiceProvider extends ServiceProvider
{
    use ConfigProviderTrait;

    protected $providers = [
        'LaradicAdmin\Users\Providers\RouteServiceProvider'
    ];

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        /** @var  \Illuminate\Foundation\Application $app */
        $app = parent::boot();
        require_once __DIR__ . '/Http/navigation.php';
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        /** @var  \Illuminate\Foundation\Application $app */
        $app = parent::register();
    }
}
