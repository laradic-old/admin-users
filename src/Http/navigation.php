<?php

Navigation::add('admin.users', 'Users', 'admin', 'sentinel.users.index');
Navigation::add('admin-right.users.profile', '<i class="fa fa-user"></i> Profile', 'admin-right.users', 'sentinel.profile.show', true);
