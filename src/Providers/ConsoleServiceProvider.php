<?php
/**
 * Part of Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.org
 */
namespace Laradic-admin\Users\Providers;

use Laradic\Console\AggregateConsoleProvider;

/**
 * This is the ConsoleServiceProvider class.
 *
 * @package                Laradic-admin\Users
 * @version                1.0.0
 * @author                  Robin Radic
 * @license                MIT License
 * @copyright            2015, Robin Radic
 * @link                      https://github.com/robinradic
 */
class ConsoleServiceProvider extends AggregateConsoleProvider
{
    protected $namespace = 'Laradic-admin\Users\Console';
    protected $commands = [
        'UsersList' => 'laradic-admin.users.commands.list'
    ];
}
