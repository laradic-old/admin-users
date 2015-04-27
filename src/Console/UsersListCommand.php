<?php
/**
 * Part of Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.org
 */
namespace Laradic-admin\Users\Console;

use Laradic\Console\Command;

/**
 * This is the UsersListCommand class.
 *
 * @package                Laradic-admin\Users
 * @version                1.0.0
 * @author                  Robin Radic
 * @license                MIT License
 * @copyright            2015, Robin Radic
 * @link                      https://github.com/robinradic
 */
class UsersListCommand extends Command
{

    protected $name = 'users:list';

    protected $description = 'Command description.';

    /**
     * {@inheritdoc}
     */
    public function fire()
    {
    }
}
