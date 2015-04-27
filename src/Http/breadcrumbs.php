<?php

Navigation::registerBreadcrumbs([
    'sentinel.login'       => [ 'Login' ],
    'sentinel.logout'      => [ 'Logout' ],
    'sentinel.users.index' => [
        'Users',
        [
            'sentinel.users.create'  => [ 'Create user' ],
            'sentinel.users.edit'    => [ 'Edit user' ],
            'sentinel.users.show'    => [ 'View user' ],
            'sentinel.profile.edit'  => [ 'Edit profile' ],
            'sentinel.profile.show'  => [ 'View user profile' ],
            'sentinel.groups.create' => [ 'Create group' ],
            'sentinel.groups.edit'   => [ 'Edit group' ],
            'sentinel.groups.show'   => [ 'View group' ],

        ]
    ]
], 'home');
